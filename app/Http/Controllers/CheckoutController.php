<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use DB;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        Order::create($request->all());
        $count =  DB::table('order')->orderby('id','Desc')->value('id');
        DB::table('order')->where('users_id',null)->update(
            [
                'users_id'=>Auth::user()->id,
            ]
        );
        while ($row = Cart::where('users_id',Auth::user()->id)->first() != null){
            $cart = Cart::where('users_id',Auth::user()->id)->first();
            DB::table('orderdetail')->insert(
                [
                    'quantity' => $cart->quantity,
                    'product' => $cart->good,
                    'price' => $cart->cost,
                    'order_id' => $count,
                    'users_id' => $cart ->users_id
                ]
            );
            Cart::where('users_id',Auth::user()->id)->first()->delete();
        }

        return redirect('/')->with('message', '訂單已送出');


}

    public function cartdetail()
    {
        $all = 0;
        $data = DB::table('carts')
            ->where('users_id', Auth::user()->id)
            ->get();

        foreach ($data as $b) {
            $all = $all + $b->total;
        }
        return view('checkout.checkout', ['checkout' => $data, 'a' => $all]);

    }

}

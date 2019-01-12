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
            DB::table('ordersdetail')->insert(
                [
                    'quantity' => $cart->quantity,
                    'product' => $cart->product,
                    'cost' => $cart->cost,
                    'total' => $cart->total,
                    'users_id' => Auth::user()->id,
                    'orders_id' => $count
                ]
            );
            Cart::where('users_id',Auth::user()->id)->first()->delete();
        }
        return redirect()->route('main.user');
    }

    public function cartdetail()
    {
        $all = 0;
        $data = DB::table('carts')
            ->where('id', Auth::user()->id)
            ->get();
        foreach ($data as $s) {
            $all = $all + $s->total;
        }
        return view('checkout.checkout', ['checkout' => $data, 'a' => $all]);

    }

}

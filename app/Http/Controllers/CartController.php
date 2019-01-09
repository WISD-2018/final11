<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{
    protected $cart;

    public function index()
    {
        $total = 0;
        $data = DB::table('cart')
            ->where('id', Auth::user()->id)
            ->get();
        foreach ($data as $money) {
            $total = $total + $money->total;
        }
        return view('cart', ['cart' => $data, 'a' => $total]);

        return view('cart.index');
    }

    public function add($id)
    {
        $good = DB::table('goods')->where('id', $id)->value('goods_name2');
        $photo = DB::table('goods')->where('id', $id)->value('photo1');
        $price = DB::table('goods')->where('id', $id)->value('price');
        DB::table('carts')->insert(
            [
                'photo' => $photo,
                'product' => $good,
                'cost' => $price,
                'total' => $price,
                'users_id' => Auth::user()->id
            ]
        );
        return Redirect::to(url()->previous());
    }

    public function update($id, $q)
    {
        $cost = DB::table('cart')->where('id', $id)->value('cost');
        DB::table('cart')
            ->where('id', $id)
            ->update([
                'qty' => $q,
                'total' => $cost * $q
            ]);
        return redirect()->route('cart');
    }
    public function delete($id)
    {
        Cart::destroy($id);
        return redirect()->route('cart');
    }
}


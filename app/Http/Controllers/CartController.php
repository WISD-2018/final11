<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            $all = 0;
            $data = DB::table('carts')
                ->where('users_id',Auth::user()->id)
                ->get();
            foreach ($data as $s){
                $all = $all + $s->total;
            }

            return view('carts.carts',['carts' => $data,'a' =>$all]);
        }else{
            return redirect()->route('login');
        }


    }


    public function add($id)
    {
            $good = DB::table('good')->where('id', $id)->value('goodname');
            $price = DB::table('good')->where('id', $id)->value('price');
        $pr = DB::table('good')->where('id', $id)->value('price');
        $photo = DB::table('good')->where('id', $id)->value('photo');
        DB::table('carts')->insert(
                [
                    'cost' => $price,
                    'good' => $good,
                    'photo' => $photo,
                    'total' =>$pr,
                    'users_id'=>Auth::user()->id
                ]
            );
            return Redirect::to(url()->previous());
    }
    public function add2($id)
    {
        $good = DB::table('good2')->where('id', $id)->value('goodname');
        $price = DB::table('good2')->where('id', $id)->value('price');
        $pr = DB::table('good2')->where('id', $id)->value('price');
        $photo = DB::table('good2')->where('id', $id)->value('photo');
        DB::table('carts')->insert(
            [
                'good' => $good,
                'cost' => $price,
                'photo' => $photo,
                'total' =>$pr,
                'users_id'=>Auth::user()->id
            ]
        );
        return Redirect::to(url()->previous());
    }
    public function add3($id)
    {
        $good = DB::table('good3')->where('id', $id)->value('goodname');
        $price = DB::table('good3')->where('id', $id)->value('price');
        $pr = DB::table('good3')->where('id', $id)->value('price');
        $photo = DB::table('good3')->where('id', $id)->value('photo');
        DB::table('carts')->insert(
            [
                'good' => $good,
                'cost' => $price,
                'photo' => $photo,
                'total' =>$pr,
                'users_id'=>Auth::user()->id
            ]
        );
        return Redirect::to(url()->previous());
    }
    public function update($id,$quantity)
    {
        $c= DB::table('carts')->where('id', $id)->value('cost');
        DB::table('carts')
            ->where('id', $id)
            ->update([
                'quantity' => $quantity,
                'total' => $c * $quantity
            ]);
        return Redirect::to(url()->previous());
    }

    public function delete($id)
    {
        Cart::destroy($id);
        return Redirect::to(url()->previous());
    }


}


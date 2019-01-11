<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index()
    {
        $data = DB::table('carts')->get();
        return view('carts.carts',['carts' => $data]);
    }

    public function add($id)
    {
            $good = DB::table('good')->where('id', $id)->value('goodname');
            $price = DB::table('good')->where('id', $id)->value('price');
            DB::table('carts')->insert(
                [
                    'good' => $good,
                    'cost' => $price,
                ]
            );
            return Redirect::to(url()->previous());
    }
    public function add2($id)
    {
        $good = DB::table('good2')->where('id', $id)->value('goodname');
        $price = DB::table('good2')->where('id', $id)->value('price');
        DB::table('carts')->insert(
            [
                'good2' => $good,
                'cost' => $price,
            ]
        );
        return Redirect::to(url()->previous());
    }
    public function add3($id)
    {
        $good = DB::table('good3')->where('id', $id)->value('goodname');
        $price = DB::table('good3')->where('id', $id)->value('price');
        DB::table('carts')->insert(
            [
                'good3' => $good,
                'cost' => $price,
            ]
        );
        return Redirect::to(url()->previous());
    }
}


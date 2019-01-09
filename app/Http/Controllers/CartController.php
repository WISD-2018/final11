<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $data = [
            'products' => $products,
        ];

        return view('cart.index', $data);
    }
}

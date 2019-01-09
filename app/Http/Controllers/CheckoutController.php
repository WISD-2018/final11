<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request, Cart $cart)
    {
        if ($request->has('products')) {
            foreach ($request->input('products') as $item) {
                $product = Product::findOrFail($item['id']);
                foreach (range(1, $item['quantity']) as $time) {
                    $cart->add($product);
                }
            }
        }

        $totalCount = $cart->count();
        $totalAmount = $cart->totalAmount();

        $data = [
            'totalCount' => $totalCount,
            'totalAmount' => $totalAmount,
        ];

        return view('checkout.index', $data);
    }
}

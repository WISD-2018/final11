<?php

namespace App\Services;

use App\Models\Product;

class Cart
{
    private $items = [];

    public function add(Product $product)
    {
        $this->items[] = $product;
    }

    public function count()
    {
        return count($this->items);
    }

    public function totalAmount()
    {
        $totalAmount = 0;
        foreach ($this->items as $item) {
            $totalAmount += $item->price;
        }

        return $totalAmount;
    }
}

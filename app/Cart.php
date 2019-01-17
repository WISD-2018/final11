<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table ='carts';
    protected $table2 ='users';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
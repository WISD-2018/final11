<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'good';

    protected $fillable=[
        'id','goodname','price','quantity','expirydate',
    ];
}

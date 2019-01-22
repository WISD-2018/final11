<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good3 extends Model
{
    protected $table = 'good3';

    protected $fillable=[
        'id','goodname','price','quantity','expirydate',
    ];
}

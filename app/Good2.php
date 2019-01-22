<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good2 extends Model
{
    protected $table = 'good2';

    protected $fillable=[
        'id','goodname','price','quantity','expirydate',
    ];
}

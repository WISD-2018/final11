<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table ='users';

       public function member()
    {
        return $this->belongsTo(Order::class);
    }

}
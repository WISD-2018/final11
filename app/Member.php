<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table ='users';

    protected $fillable=[
        'id','name','email','created_at',
    ];

}
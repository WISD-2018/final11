<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';

    public function order(){
        return $this -> hasMany('app\order');
    }
}

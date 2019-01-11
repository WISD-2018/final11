<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'good';

    public function orderdetail(){
        return $this -> belongsTo('app\orderdetail');
    }
}

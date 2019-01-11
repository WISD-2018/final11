<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good3 extends Model
{
    protected $table = 'good3';

    public function orderdetail(){
        return $this -> belongsTo('app\orderdetail');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good2 extends Model
{
    protected $table = 'good2';

    public function orderdetail(){
        return $this -> belongsTo('app\orderdetail');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $table = 'orderdetail';

    public function good(){
        return $this -> hasMany('app\good');
    }

    public function good2(){
        return $this -> hasMany('app\good2');
    }

    public function good3(){
        return $this -> hasMany('app\good3');
    }

    public function order(){
        return $this -> belongsTo('app\order');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $table = 'orderdetail';
    public function good(){
        return $this -> hasMany('app\good');
    }
    public function order(){
        return $this -> belongsTo('app\order');
    }
}

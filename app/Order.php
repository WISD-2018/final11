<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function employee(){
        return $this -> belongsTo('app\employee');
    }
    public function users(){
        return $this -> belongsTo('app\User');
    }
    public function carts()
    {
        return $this->hasMany('app\Cart');
    }

    protected  $fillable=[
        'id','users_id','username', 'userphone',  'useraddress', 'created_at', 'updated_at',
    ];


}


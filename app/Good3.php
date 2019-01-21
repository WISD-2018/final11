<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good3 extends Model
{
    protected $table = 'good3';

    public function back()
    {
        return $this->belongsTo(Order::class);
    }
}

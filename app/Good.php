<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $table = 'good';

    public function back()
    {
        return $this->belongsTo(Order::class);
    }
}

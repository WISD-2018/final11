<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function Order()
{
    $data = DB::table('order')->get();;
    return view('back.order', ['orders' => $data]);
}
    
    public function member()
    {
        return view('back.member');
    }
    public function back()
    {
        return view('back.backindex');
    }
    public function employee()
    {
        return view('back.employee');
    }
}

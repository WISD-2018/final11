<?php

namespace App\Http\Controllers;

use App\Order;
use App\Orderdetail;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = order::where('users_id',Auth::user()->id)->get();
        $ordersdetail = orderdetail::where('users_id',Auth::user()->id)->get();
        return view('user',['order' => $orders,'orderdetail' => $ordersdetail]);

    }


}

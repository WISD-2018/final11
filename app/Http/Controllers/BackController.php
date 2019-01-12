<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BackController extends Controller
{
    public function back()
{
    $data = DB::table('good')->get();;
    return view('back.backindex', ['goods' => $data]);
}
    
    public function charts()
    {
        return view('back.charts');
    }
}

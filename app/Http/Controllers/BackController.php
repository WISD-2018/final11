<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BackController extends Controller
{
    public function back()
{
    $data = DB::table('good')->get();;
    $data2 = DB::table('good2')->get();;
    $data3 = DB::table('good3')->get();;
    return view('back.backindex', ['goods' => $data]+['good2'=>$data2]+['good3'=>$data3]);
}
    
    public function charts()
    {
        return view('back.charts');
    }
}

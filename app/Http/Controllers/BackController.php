<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;
use DB;

class BackController extends Controller
{
    public function back()
    {
        $data = DB::table('good')->get();;
        $data2 = DB::table('good2')->get();;
        $data3 = DB::table('good3')->get();;
        return view('back.backindex', ['goods' => $data] + ['good2' => $data2] + ['good3' => $data3]);
    }

    public function member()
    {
        return view('back.member');
    }

    public function order()
    {
        return view('back.order');
    }

    public function employee()
    {
        return view('back.employee');
    }
    public function delete($id)
    {
        Good::destroy($id);
        return redirect()->route('back.backindex');
    }
    public function delete2($id)
    {
        Good2::destroy($id);
        return redirect()->route('back.backindex');
    }
    public function delete3($id)
    {
        Good3::destroy($id);
        return redirect()->route('back.backindex');
    }
}

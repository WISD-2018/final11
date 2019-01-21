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
    return view('back.backindex', ['goods' => $data]+['good2'=>$data2]+['good3'=>$data3]);
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
    public function create()
    {
        return view('back.create');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.posts.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SnackController extends Controller
{
    public function snack()
    {
        $data = DB::table('good')->get();;
        return view('snack', ['goods' => $data]);
    }
    public function snackdetail($id)
    {
        $data = DB::table('good')->where('id',$id)->get();;
        return view('snackproducts.snackp1', ['goods' => $data]);
    }
}

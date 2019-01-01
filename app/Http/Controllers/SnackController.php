<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function snack()
    {
        return view('snack');
    }
    public function snackp1()
    {
        return view('snackproducts.snackp1');
    }
    public function snackp2()
    {
        return view('snackproducts.snackp2');
    }
    public function snackp3()
    {
        return view('snackproducts.snackp3');
    }
    public function snackp4()
    {
        return view('snackproducts.snackp4');
    }
}

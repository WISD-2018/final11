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
}

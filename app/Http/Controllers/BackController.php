<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function back()
{
    return view('back.backindex');
}
    public function backlogin()
    {
        return view('back.login');
    }
    public function backregister()
    {
        return view('back.register');
    }

    public function charts()
    {
        return view('back.charts');
    }
}

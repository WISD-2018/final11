<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function back()
{
    return view('back.backindex');
}
    public function error()
    {
        return view('back.404');
    }
    public function backlogin()
    {
        return view('back.login');
    }
    public function backregister()
    {
        return view('back.register');
    }
    public function blank()
    {
        return view('back.blank');
    }
    public function charts()
    {
        return view('back.charts');
    }
    public function forgotpassword()
    {
        return view('back.forgot-password');
    }
    public function tables()
    {
        return view('back.tables');
    }
}

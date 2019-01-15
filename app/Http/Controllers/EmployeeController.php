<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    public function employee()
    {
        $data = DB::table('employee')->get();;
        return view('back.employee', ['employees' => $data]);
    }
    public function member()
{
    return view('back.member');
}
    public function back()
    {
        return view('back.backindex');
    }
    public function order()
    {
        return view('back.order');
    }
}

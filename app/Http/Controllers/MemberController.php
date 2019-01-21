<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use DB;


class MemberController extends Controller
{
    public function member()
{
    $data = DB::table('users')->get();;
    return view('back.member', ['users' => $data]);
}
    public function back()
    {
        return view('back.backindex');
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
        Member::destroy($id);
        return redirect()->route('back.member');
    }
}

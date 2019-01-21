<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use DB;


class MemberController extends Controller
{
    public function index()
    {
        $member=Member::orderBy('id', 'ASC')->paginate(6);
        $data=['member'=>$member];
        return view('back.member.member', $data);
    }

    public function edit($id)
    {
        $member=Member::find($id);
        $data = ['member' => $member];
        return view('back.member.edit', $data);
    }


    public function update(Request $request , $id)
    {
        $member=Member::find($id);
        $member->update($request->all());

        return redirect()->route('back.member.member');
    }

    public function store(Request $request)
    {
        Member::create($request->all());
        return redirect()->route('back.member.member');
    }


    public function destroy($id)
    {
        Member::destroy($id);
        return redirect()->route('back.member.member');
    }

    public function create()
    {
        return view('back.member.create');
    }

}

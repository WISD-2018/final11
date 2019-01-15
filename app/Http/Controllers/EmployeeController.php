<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\employee;

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
    public function delete($id){
        employee::destroy($id);
        return Redirect::to(url()->previous());
    }
    public function store(Request $request)
    {
        employee::create($request->all());
        return redirect()->route('back.backindex');
    }
    public function edit($id)
    {
        $employee=employee::find($id);
        $data = ['employee' => $employee];
        return view('back.edit', $data);
    }
    public function update(Request $request, $id)
    {

        $employee=employee::find($id);
        $employee->update($request->all());
        return redirect()->route('back.backindex');
    }
}

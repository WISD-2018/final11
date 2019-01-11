<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NutritionController extends Controller
{
    public function nutrition()
    {
        $data = DB::table('good3')->get();;
        return view('nutrition', ['goods' => $data]);
    }
    public function nutritiondetail($id)
    {
        $data = DB::table('good3')->where('id',$id)->get();;
        return view('nutritionproducts.nutritionp1', ['goods' => $data]);
    }
}

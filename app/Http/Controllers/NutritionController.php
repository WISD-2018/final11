<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutritionController extends Controller
{
    public function nutrition()
    {
        return view('nutrition');
    }
    public function nutritionp1()
    {
        return view('nutritionproducts.nutritionp1');
    }
    public function nutritionp2()
    {
    return view('nutritionproducts.nutritionp2');
    }
    public function nutritionp3()
    {
        return view('nutritionproducts.nutritionp3');
    }
    public function nutritionp4()
    {
        return view('nutritionproducts.nutritionp4');
    }
}

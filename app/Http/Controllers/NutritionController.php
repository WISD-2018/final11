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
}

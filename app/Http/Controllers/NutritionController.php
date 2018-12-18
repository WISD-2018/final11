<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutritionController extends Controller
{
    public function nutrition()
    {
        return view('nutrition');
    }
}

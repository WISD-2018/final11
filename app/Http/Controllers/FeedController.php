<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function feed()
    {
        return view('feed');
    }
    public function feedp1()
    {
        return view('feedproducts.feedp1');
    }
}

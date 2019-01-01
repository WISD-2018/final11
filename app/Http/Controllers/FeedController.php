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
    public function feedp2()
    {
        return view('feedproducts.feedp2');
    }
    public function feedp3()
    {
        return view('feedproducts.feedp3');
    }
    public function feedp4()
    {
        return view('feedproducts.feedp4');
    }
}

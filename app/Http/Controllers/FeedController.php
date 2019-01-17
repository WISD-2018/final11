<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FeedController extends Controller
{

    public function feed()
    {
        $data = DB::table('good2')->get();;

        return view('feed', ['goods' => $data]);
    }
    public function feeddetail($id)
    {
        $data = DB::table('good2')->where('id',$id)->get();;
        return view('feedproducts.feedp1', ['goods' => $data]);
    }
}

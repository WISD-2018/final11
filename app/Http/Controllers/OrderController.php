<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Order $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $orders
     * @return \Illuminate\Http\Response
     */
    //增加購物車物品數量
    public function update(Request $request, Order $orders)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $orders
     * @return \Illuminate\Http\Response
     */
    //刪除購物車物品
    public function destroy(Request $request)
    {


        //
    }

    public function ordersearch()
    {
        //
    }

    public function overtime()
    {
        //
    }

    public function orderdestroy($id)
    {
        //
    }
}

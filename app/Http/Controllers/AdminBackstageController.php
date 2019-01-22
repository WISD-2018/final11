<?php

namespace App\Http\Controllers;

use App\Good2;
use App\Good3;
use Illuminate\Http\Request;
use App\User;
use App\order;
use App\Product;

class AdminBackstageController extends Controller
{
    //

    public function index()
    {
        $user=User::orderBy('id', 'ASC')->paginate(6);
        $data=['users'=>$user];
        return view('admin.user.backstage_user', $data);
    }

    public function edit($id)
    {
        $user=User::find($id);
        $data = ['user' => $user];
        return view('admin.user.backstage_useredit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        return redirect()->route('admin.user.backstage_user');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.user.backstage_user');
    }

    //訂單管理
    public function orderindex()
    {
        $order=Order::orderBy('id', 'ASC')->paginate(6);
        $data=['orders'=>$order];
        return view('admin.order.backstage_order', $data);
    }

    public function orderedit($id)
    {
        $order=Order::find($id);
        $data = ['order' => $order];
        return view('admin.order.backstage_orderedit', $data);
    }


    public function orderupdate(Request $request , $id)
    {
        $order=Order::find($id);
        $order->update($request->all());

        return redirect()->route('admin.order.backstage_order');
    }
    public function orderdestroy($id)
    {
        Order::destroy($id);
        return redirect()->route('admin.order.backstage_order');
    }

    //商品管理
    public function productindex()
    {
        $product=Product::orderBy('id', 'ASC')->paginate(6);
        $product2=Good2::orderBy('id', 'ASC')->paginate(6);
        $product3=Good3::orderBy('id', 'ASC')->paginate(6);
        $data=['products'=>$product];
        $data2=['products2'=>$product2];
        $data3=['products3'=>$product3];
        return view('admin.product.backstage_product', $data+$data2+$data3);
    }

    public function productedit($id)
    {
        $product=Product::find($id);
        $data = ['product' => $product];
        return view('admin.product.backstage_productedit', $data);
    }
    public function productedit2($id)
    {
        $product2=Good2::find($id);
        $data = ['product2' => $product2];
        return view('admin.product.backstage_productedit2', $data);
    }
    public function productedit3($id)
    {
        $product3=Good3::find($id);
        $data = ['product3' => $product3];
        return view('admin.product.backstage_productedit3', $data);
    }


    public function productupdate(Request $request , $id)
    {
        $product=Product::find($id);
        $product->update($request->all());
        return redirect()->route('admin.product.backstage_product');
    }
    public function productupdate2(Request $request , $id)
    {
        $product2=Good2::find($id);
        $product2->update($request->all());

        return redirect()->route('admin.product.backstage_product');
    }
    public function productupdate3(Request $request , $id)
    {
        $product3=Good3::find($id);
        $product3->update($request->all());

        return redirect()->route('admin.product.backstage_product');
    }

    public function productstore(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('admin.product.backstage_product');
    }


    public function productdestroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.product.backstage_product');
    }

    public function productcreate()
    {
        return view('admin.product.backstage_productcreate');
    }

}

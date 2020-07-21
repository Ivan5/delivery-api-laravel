<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //

    public function index(){
        $orders = Orders::all();
        return view('admin.orders.index',compact('orders'));
    }

    public function edit($id){
        $order = Orders::whereId($id)->first();
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, $id){
        $order = Orders::findOrFail($id);
        ($request->status) ? $order->status = 1 : $order->status = 0;

        $order->save();
        return redirect()->route('admin.orders.index');
    }
}

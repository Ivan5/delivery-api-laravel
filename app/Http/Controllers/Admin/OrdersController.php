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
}

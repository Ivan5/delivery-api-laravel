<?php

namespace App\Http\Controllers\Admin;

use App\Details;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class DetailsController extends Controller
{
    //

    public function index(){
        if(!empty(Session::get('pedidos_id'))){
            $details = Details::whereOrders_id(Session::get('orders_id'))->get();

            return view('admin.details.index', compact('details'));
        }
    }
}

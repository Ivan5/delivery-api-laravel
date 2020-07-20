<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use Session;

class ProductsController extends Controller
{
    //
    public function index(){
        if(!empty(Session::get('subcategories_id'))){
            $products = Products::whereSubcategories_id(Session::get('subcategories_id'))->get();

            return view('admin.products.index', compact('products'));
        }
    }

     public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product = new Products($request->all());
        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
            $ruta = public_path('/img/products/'.$imageUrl->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $product->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        $product->subcategories_id = Session::get('subcategories_id');
        ($request->status) ? $product->status = 1 : $product->status = 0;
        
        $product->save();
        return redirect()->route('admin.products.index');
    }


    
    public function edit($id)
    {
        $product = Products::whereId($id)->first();

        return view('admin.products.edit',compact('product'));
    }

    
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->fill($request->all());

        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
            $ruta = public_path('/img/products/'.$imageUrl->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $product->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        
        ($request->status) ? $product->status = 1 : $product->status = 0;
        $product->save();
        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index');
    }

}

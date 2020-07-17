<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subcategories;
use Illuminate\Http\Request;

use Session;

class SubcategoriesController extends Controller
{
    
    public function index()
    {
        if(!empty(Session::get('categories_id'))){
            $subcategories = Subcategories::whereCategories_id(Session::get('categories_id'))->get();
            return view('admin.subcategories.index', compact('subcategories'));
        }
        
    }

    
    public function create()
    {
        return view('admin.subcategories.create');
    }

    public function store(Request $request)
    {
        $subcategory = new Subcategories($request->all());
        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
            $ruta = public_path('/img/categories/'.$imageUrl->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $subcategory->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        if($request->portada)
            $subcategory->portada = 1;
        else
            $subcategory->portada = 0;
        $subcategory->save();
        return redirect()->route('admin.categories.index');
    }


    
    public function edit($id)
    {
        $subcategory = Subcategories::whereId($id)->first();

        return view('admin.categories.edit',compact('category'));
    }

    public function show($id){

        Session::put('categories_id',$id);
        return redirect('/admin/subcategories');
    }

    
    public function update(Request $request, $id)
    {
        $subcategory = Subcategories::findOrFail($id);
         $subcategory->fill($request->all());

        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
            $ruta = public_path('/img/categories/'.$imageUrl->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $subcategory->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        if($request->portada)
            $subcategory->portada = 1;
        else
            $subcategory->portada = 0;
        $subcategory->save();
        return redirect()->route('admin.categories.index');
    }

    
    public function destroy($id)
    {
        $subcategory = Subcategories::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('admin.categories.index');
    }
}

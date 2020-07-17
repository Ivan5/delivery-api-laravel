<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Categories($request->all());
        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
            $ruta = public_path('/img/categories/'.$imageUrl->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $category->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        if($request->portada)
            $category->portada = 1;
        else
            $category->portada = 0;
        $category->save();
        return redirect()->route('admin.categories.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::whereId($id)->first();

        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Categories::findOrFail($id);
         $category->fill($request->all());

        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
            $ruta = public_path('/img/categories/'.$imageUrl->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $category->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        if($request->portada)
            $category->portada = 1;
        else
            $category->portada = 0;
        $category->save();
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}

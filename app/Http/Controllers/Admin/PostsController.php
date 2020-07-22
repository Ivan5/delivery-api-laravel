<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    
    
    public function index()
    {
        $posts = Posts::all();
        return view('admin.posts.index', compact('posts'));
    }

    
    public function create()
    {
        $categories = Categories::orderBy('name','asc')->pluck('name','id');
        return view('admin.posts.create',compact('categories'));
    }

   
    public function store(Request $request)
    {
        $post = new Posts($request->all());
        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
             $ruta = public_path('/img/posts/'.$request->file('imageUrl')->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $post->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        $post->save();
        return redirect()->route('admin.posts.index');
    }


    public function edit($id)
    {
        $post = Posts::whereId($id)->first();
        $categories = Categories::orderBy('name','asc')->pluck('name','id');

        return view('admin.posts.edit',compact('post','categories'));
    }

    

    
    public function update(Request $request, $id)
    {
        $post = Posts::findOrFail($id);
         $post->fill($request->all());

        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
             $ruta = public_path('/img/posts/'.$request->file('imageUrl')->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $post->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        
        $post->save();
        return redirect()->route('admin.posts.index');
    }

    
    public function destroy($id)
    {
        $post = Posts::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}

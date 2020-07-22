<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portadas;
use Illuminate\Http\Request;
use Session;

class PortadasController extends Controller
{
   
    public function index()
    {
        $portadas = Portadas::all();
        return view('admin.portadas.index', compact('portadas'));
    }

    public function create()
    {
        return view('admin.portadas.create');
    }

  
    public function store(Request $request)
    {
        $portada = new Portadas($request->all());
        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
            $ruta = public_path('/img/portadas/'.$request->file('imageUrl')->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $portada->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        
        $portada->save();
        return redirect()->route('admin.portadas.index');
    }


    public function edit($id)
    {
        $portada = Portadas::whereId($id)->first();

        return view('admin.portadas.edit',compact('portada'));
    }

    public function show($id){

        Session::put('portadas_id',$id);
        return redirect('/admin/portadas');
    }


    public function update(Request $request, $id)
    {
        $portada = Portadas::findOrFail($id);
         $portada->fill($request->all());

        if($request->hasFile('imageUrl')):
            $imageUrl = $request->file('imageUrl');
            $ruta = public_path('/img/portadas/'.$request->file('imageUrl')->getClientOriginalName());
            copy($imageUrl->getRealPath(), $ruta);
            $portada->imageUrl = $imageUrl->getClientOriginalName();
        endif;
        
        $portada->save();
        return redirect()->route('admin.portadas.index');
    }

   
    public function destroy($id)
    {
        $portada = Portadas::findOrFail($id);
        $portada->delete();

        return redirect()->route('admin.portadas.index');
    }
}

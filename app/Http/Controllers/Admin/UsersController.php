<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        $data = User::whereType(0)->get();
        return view('admin.users.index', compact('data'));
    }

    public function edit(User $user){
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        // if($request->status){
        //     $user->status = 1;
        // }else{
        //     $user->status = 0;
        // }

        ($request->status) ? $user->status = 1 : $user->status = 0;

        $user->save();

        return redirect()->route('admin.users.index');
    }
}

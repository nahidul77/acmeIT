<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function view(){
        $users = User::all();
        return view('backend.user.user-view', ['users'=> $users]);
    }

    public function add(){
        return view('backend.user.user-add');
    }

    public function dataValidate($request){
        $request->validate([
            'usertype'=>'required',
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required'
        ]);
    }

    public function saveData($user, $request){
        $user->usertype = $request->usertype;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    }

    public function store(Request $request){
        $this->dataValidate($request);
        $user = new User();
        $this->saveData($user, $request);
    }
}

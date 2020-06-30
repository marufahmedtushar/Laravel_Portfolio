<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function registered()
    {
    	$users = User::all();

    	return view('register')->with('users',$users);
    }

    public function registeredit(Request $request,$id)
    {
    	$users= User::findOrFail($id);
    	return view('reigister_edit')->with('users',$users);

    }

    public function registerupdate(Request $request,$id)
    {

    	$users= User::find($id);
    	$users->name = $request->input('username');
    	$users->email = $request->input('email');
        $users->usertype = $request->input('usertype');
    	$users->update();
    	return redirect('/register')->with('status','Your Data is upadated');

    }


    public function registerdelete($id)
    {

        $users= User::findOrFail($id);
        $users->delete();
        return redirect('/register')->with('status','Data is Deleted Sucessfully');

    }

    
}

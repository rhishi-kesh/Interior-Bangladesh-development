<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function register_user(){

        return view('backend.pages.register.register');
    }
    function register_user_post(Request $request){

        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required'],
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => Carbon::now()
        ]);

        return redirect('users')->with('success','User Added Successfull');
    }
    function users(){

        $users = User::paginate('10');
        return view('backend.pages.users.users', compact('users'));
    }
    function delete_user($id){

        User::findOrFail($id)->delete();
        return back()->with('delete','User Removed Successfull');
    }
}

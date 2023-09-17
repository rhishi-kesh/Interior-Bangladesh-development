<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    function edit_profile(){
        return view('backend.pages.profile.user_profile');
    }
    function update_image(Request $request){
        $validated = $request->validate([
            'profile_image' => ['required',
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
        ]);

        $fileName = '';

        if ($request->hasFile('profile_image')) {
            $fileName = rand() . '.' . $request->profile_image->getClientOriginalExtension();
            if(Auth::user()->profile){
                unlink(public_path('images/profile').'/'.Auth::user()->profile);
            }
            $request->profile_image->move(public_path('images/profile'), $fileName);
        } else {
            $fileName = Auth::user()->profile;
        }

        $user_update = Auth::user();
        $user_update->profile = $fileName;
        $user_update->updated_at = Carbon::now();
        $user_update->update();

        return back()->with('success','Profile Image Update Successfull');
    }
    function update_information(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'position' => ['required'],
        ]);

        $user_update = Auth::user();
        $user_update->name = $request->name;
        $user_update->email = $request->email;
        $user_update->position = $request->position;
        $user_update->update();

        return back()->with('success','Profile Information Update Successfull');
    }
    function change_password(Request $request){
        $validated = $request->validate([
            'old_Password' => ['required'],
            'new_password' => ['required', 'string', 'min:8'],
            'C_password' => ['same:new_password'],
        ]);

        if(Hash::check($request->old_Password, Auth::user()->password)){
            $user_update = Auth::user();
            $user_update->password = Hash::make($request->C_password);
            $user_update->update();
        }else{
            return back()->with('old','Old Password Not Correct');
        }
        return back()->with('success','Password Change Successfull');
    }
}

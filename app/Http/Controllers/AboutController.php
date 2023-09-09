<?php

namespace App\Http\Controllers;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    function about()
    {
        $about = About::first();
        return view('backend.pages.about.about', compact('about'));
    }
    function updateabout(Request $request){

        $request->validate([
            'why_choose_us'=>'required',
            'choose_us_image' => [
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'mission'=>'required',
            'mission_image' => [
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'vision'=>'required',
            'our_vision_image' => [
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'project_c'=>'required',
            'ongoing_p'=>'required',
            'employed'=>'required',
            'experiance'=>'required',
        ]);

        $id = $request->id;
        $About = About::findOrFail($id);

        $choose_us = '';

        if ($request->hasFile('choose_us_image')) {
            $choose_us = rand() . '.' . $request->choose_us_image->getClientOriginalExtension();
            unlink(public_path('images/about').'/'.$About->choose_us_image);
            $request->choose_us_image->move(public_path('images/about'), $choose_us);
        } else {
            $choose_us = $About->choose_us_image;
        }

        $mission = '';

        if ($request->hasFile('mission_image')) {
            $mission = rand() . '.' . $request->mission_image->getClientOriginalExtension();
            unlink(public_path('images/about').'/'.$About->mission_image);
            $request->mission_image->move(public_path('images/about'), $mission);
        } else {
            $mission = $About->mission_image;
        }

        $vision = '';

        if ($request->hasFile('our_vision_image')) {
            $vision = rand() . '.' . $request->our_vision_image->getClientOriginalExtension();
            unlink(public_path('images/about').'/'.$About->vision_image);
            $request->our_vision_image->move(public_path('images/about'), $vision);
        } else {
            $vision = $About->vision_image;
        }

        About::where('id',$id)->update([
                'choose_us' => $request->why_choose_us,
                'choose_us_image' => $choose_us,
                'mission' => $request->mission,
                'mission_image' => $mission,
                'vision' => $request->vision,
                'vision_image' => $vision,
                'project_completed' => $request->project_c,
                'ongogin_project' => $request->ongoing_p,
                'employe' => $request->employed,
                'experiance' => $request->experiance,
                'updated_at' => Carbon::now()
        ]);

        return back()->with('success','About Details Updated Successfull');

    }
}

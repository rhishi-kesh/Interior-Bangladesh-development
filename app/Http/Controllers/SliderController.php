<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
// use Faker\Core\File;
use Illuminate\Http\Request;
use File;

class SliderController extends Controller
{
    function addslide(){
        return view('backend.pages.sliders.add_slider');
    }
    function addsliderpost(Request $request){
        $rules = [
            'title'=>'required|unique:sliders',
            'btn_link'=>'required',
            'btn_text'=>'required',
            'bg_image' => ['required',
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'subtitle'=>'required',
        ];
        $cm = [
            'title.required'=>'Title feild is empty',
            'title.unique'=>'This Title Already Exist',
            'btn_link.required'=>'Btn Link feild is empty',
            'btn_text.required'=>'Btn Text feild is empty',
            'bg_image.required'=>'Image feild is empty',
            'bg_image.image'=>'Please Choose An Image',
            'bg_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'bg_image.max'=>"Image Can't Be Larger Then 2 MB",
            'subtitle.required'=>'Subtitle feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        if($request->file('bg_image')){
            $image = $request->file('bg_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $request->bg_image->move(public_path('images/slider'), $filename);

            Slider::insert([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'btn_link' => $request->btn_link,
                'btn_text' => $request->btn_text,
                'background' => $filename,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success','Slide Add Successfull');
    }
    function sliders(){
        $slides = Slider::simplepaginate('10');
        return view('backend.pages.sliders.slides', compact('slides'));
    }
    function slideedit($id){
        $slide = Slider::findOrFail($id);
        return view('backend.pages.sliders.slide_edit', compact('slide'));
    }
    function updateslide(Request $request){
        $rules = [
            'title'=>'required',
            'btn_link'=>'required',
            'btn_text'=>'required',
            'bg_image' => ['image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'subtitle'=>'required',
        ];
        $cm = [
            'title.required'=>'Title feild is empty',
            'btn_link.required'=>'Btn Link feild is empty',
            'btn_text.required'=>'Btn Text feild is empty',
            'bg_image.image'=>'Please Choose An Image',
            'bg_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'bg_image.max'=>"Image Can't Be Larger Then 2 MB",
            'subtitle.required'=>'Subtitle feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        $id = $request->id;
        $slider = Slider::findOrFail($id);

        $fileName = '';

        if ($request->hasFile('bg_image')) {
            $fileName = time() . '.' . $request->bg_image->getClientOriginalExtension();
            unlink(public_path('images/slider').'/'.$slider->background);
            $request->bg_image->move(public_path('images/slider'), $fileName);
        } else {
            $fileName = $slider->background;
        }

        Slider::where('id',$id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'btn_link' => $request->btn_link,
            'btn_text' => $request->btn_text,
            'background' => $fileName,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('sliders')->with('success','Slide Updated Successfull');
    }
    function slidedelete($id){
        $slider = Slider::findOrFail($id);
        unlink(public_path('images/slider').'/'.$slider->background);
        $delete = Slider::findOrFail($id)->delete();

        return back()->with('delete','Slide Deleted Successfull');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function addservice(){
        return view('backend.pages.services.add_service');
    }
    function addservicepost(Request $request){
        $rules = [
            'service_name'=>'required|unique:services',
            'service_image' => ['required',
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'service_subtitle'=>'required',
        ];
        $cm = [
            'service_name.required'=>'Service Name feild is empty',
            'service_name.unique'=>'This Name Already Exist',
            'service_image.required'=>'Image feild is empty',
            'service_image.image'=>'Please Choose An Image',
            'service_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'service_image.max'=>"Image Can't Be Larger Then 2 MB",
            'service_subtitle.required'=>'Subtitle feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        if($request->file('service_image')){
            $image = $request->file('service_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $request->service_image->move(public_path('images/service'), $filename);

            Service::insert([
                'service_name' => $request->service_name,
                'service_subtitle' => $request->service_subtitle,
                'service_image' => $filename,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success','Service Add Successfull');
    }
    function services(){
        $services = Service::paginate('10');
        return view('backend.pages.services.services', compact('services'));
    }
    function serviceedit($id){
        $service = Service::findOrFail($id);
        return view('backend.pages.services.service_edit', compact('service'));
    }
    function updateservice(Request $request){
        $rules = [
            'service_name'=>'required',
            'service_image' => [
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'service_subtitle'=>'required',
        ];
        $cm = [
            'service_name.required'=>'Service Name feild is empty',
            'service_image.image'=>'Please Choose An Image',
            'service_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'service_image.max'=>"Image Can't Be Larger Then 2 MB",
            'service_subtitle.required'=>'Subtitle feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        $id = $request->id;
        $service = Service::findOrFail($id);

        $fileName = '';

        if ($request->hasFile('service_image')) {
            $fileName = time() . '.' . $request->service_image->getClientOriginalExtension();
            unlink(public_path('images/service').'/'.$service->service_image);
            $request->service_image->move(public_path('images/service'), $fileName);
        } else {
            $fileName = $service->service_image;
        }

        Service::where('id',$id)->update([
            'service_name' => $request->service_name,
            'service_subtitle' => $request->service_subtitle,
            'service_image' => $fileName,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('services')->with('success','Service Updated Successfull');
    }
    function servicedelete($id){
        $service = Service::findOrFail($id);
        unlink(public_path('images/service').'/'.$service->service_image);
        Service::findOrFail($id)->delete();

        return back()->with('delete','Slide Deleted Successfull');
    }
}

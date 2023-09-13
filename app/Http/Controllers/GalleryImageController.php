<?php

namespace App\Http\Controllers;

use App\Models\Gallery_Category;
use App\Models\GalleryImage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    function addimage(){
        $gallery_categorys = Gallery_Category::get();
        return view('backend.pages.gallery.image.add_gallery_image', compact('gallery_categorys'));
    }
    function addimagepost(Request $request){
        $rules = [
            'gallery_categorys'=>'required',
            'gallery_image' => ['required',
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
        ];
        $cm = [
            'gallery_categorys.required'=>'Gallery Category feild is empty',
            'gallery_image.required'=>'Image feild is empty',
            'gallery_image.image'=>'Please Choose An Image',
            'gallery_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'gallery_image.max'=>"Image Can't Be Larger Then 2 MB",
        ];
        $this->validate($request, $rules, $cm);

        if($request->file('gallery_image')){
            $image = $request->file('gallery_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $request->gallery_image->move(public_path('images/gallery'), $filename);

            GalleryImage::insert([
                'gallery_category_id' => $request->gallery_categorys,
                'gallery_image' => $filename,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success','Image Add Successfull');
    }
    function images(){
        $gallery_images = GalleryImage::paginate('10');
        return view('backend.pages.gallery.image.gallery_image', compact('gallery_images'));
    }
    function imageedit($id){
        $image = GalleryImage::findOrFail($id);
        $gallery_categorys = Gallery_Category::get();
        return view('backend.pages.gallery.image.gallery_image_edit', compact('image','gallery_categorys'));
    }
    function imageupdate(Request $request){
        $rules = [
            'gallery_categorys'=>'required',
            'gallery_image' => [
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
        ];
        $cm = [
            'gallery_categorys.required'=>'Gallery Category feild is empty',
            'gallery_image.image'=>'Please Choose An Image',
            'gallery_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'gallery_image.max'=>"Image Can't Be Larger Then 2 MB",
        ];
        $this->validate($request, $rules, $cm);

        $id = $request->id;
        $team = GalleryImage::findOrFail($id);

        $fileName = '';

        if ($request->hasFile('gallery_image')) {
            $fileName = time() . '.' . $request->gallery_image->getClientOriginalExtension();
            unlink(public_path('images/gallery').'/'.$team->gallery_image);
            $request->gallery_image->move(public_path('images/gallery'), $fileName);
        } else {
            $fileName = $team->gallery_image;
        }

        GalleryImage::where('id',$id)->update([
            'gallery_category_id' => $request->gallery_categorys,
            'gallery_image' => $fileName,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('images')->with('success','Gallery Image Updated Successfull');
    }
    function imagedelete($id){
        $gallery_image = GalleryImage::findOrFail($id);
        unlink(public_path('images/gallery').'/'.$gallery_image->gallery_image);
        GalleryImage::findOrFail($id)->delete();

        return back()->with('delete','Gallery Image Deleted Successfull');
    }
}

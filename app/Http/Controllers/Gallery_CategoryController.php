<?php

namespace App\Http\Controllers;

use App\Models\Gallery_Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Gallery_CategoryController extends Controller
{
    function gallery_category(Request $request){
        $categoris = Gallery_Category::paginate('10');
        return view('backend.pages.gallery.category.category_gallery', compact('categoris'));
    }
    function gallery_category_post(Request $request){
        $rules = [
            'category_name' => ['required',]
        ];
        $cm = [
            'category_name.required'=>'Category feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        Gallery_Category::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success','Category Add Successfull');
    }
    function gallery_categoryupdate(Request $request){
        $rules = [
            'category_name' => ['required',]
        ];
        $cm = [
            'category_name.required'=>'Category feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        $id = $request->id;

        Gallery_Category::where('id',$id)->update([
            'category_name' => $request->category_name,
            'updated_at' => Carbon::now()
        ]);

        return back()->with('success','Category Updated Successfull');
    }
    function gallery_categorydelete($id){
        $client = Gallery_Category::findOrFail($id);
        Gallery_Category::findOrFail($id)->delete();

        return back()->with('delete','Category Deleted Successfull');
    }
}

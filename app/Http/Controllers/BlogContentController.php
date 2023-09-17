<?php

namespace App\Http\Controllers;

use App\Models\BlogContent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogContentController extends Controller
{
    function blog_content(Request $request){
        $contents = BlogContent::paginate('10');
        return view('backend.pages.blog.content.blog_content', compact('contents'));
    }
    function blog_content_post(Request $request){
        $rules = [
            'blog_title'=>'required',
            'blog_image' => ['required',
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'blog_subtitle'=>'required',
        ];
        $cm = [
            'blog_title.required'=>'Blog Title feild is empty',
            'blog_image.required'=>'Image feild is empty',
            'blog_image.image'=>'Please Choose An Image',
            'blog_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'blog_image.max'=>"Image Can't Be Larger Then 2 MB",
            'blog_subtitle.required'=>'Blog subtitle feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        if($request->file('blog_image')){
            $image = $request->file('blog_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $request->blog_image->move(public_path('images/blog/content'), $filename);

            $title = $request->blog_title;
            $slug = str_replace(' ', '-', $title);

            BlogContent::insert([
                'blog_title' => $request->blog_title,
                'blog_subtitle' => $request->blog_subtitle,
                'blog_image' => $filename,
                'slug' => $slug,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success','Blog Add Successfull');
    }
    function blog_contentedit($id){
        $contents = BlogContent::findOrFail($id);
        return view('backend.pages.blog.content.blog_content_edit', compact('contents'));
    }
    function blog_contentupdate(Request $request){
        $rules = [
            'blog_title'=>'required',
            'blog_image' => [
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'blog_subtitle'=>'required',
        ];
        $cm = [
            'blog_title.required'=>'Blog Title feild is empty',
            'blog_image.image'=>'Please Choose An Image',
            'blog_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'blog_image.max'=>"Image Can't Be Larger Then 2 MB",
            'blog_subtitle.required'=>'Blog feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        $id = $request->id;
        $blog_image = BlogContent::findOrFail($id);

        $fileName = '';

        if ($request->hasFile('blog_image')) {
            $fileName = time() . '.' . $request->blog_image->getClientOriginalExtension();
            unlink(public_path('images/blog/content').'/'.$blog_image->blog_image);
            $request->blog_image->move(public_path('images/blog/content'), $fileName);
        } else {
            $fileName = $blog_image->blog_image;
        }

        BlogContent::where('id',$id)->update([
            'blog_title' => $request->blog_title,
            'blog_subtitle' => $request->blog_subtitle,
            'blog_image' => $fileName,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('blog_content')->with('success','Service Updated Successfull');
    }
    function blog_contentdelete($id){
        $blog_image = BlogContent::findOrFail($id);
        unlink(public_path('images/blog/content').'/'.$blog_image->blog_image);
        BlogContent::findOrFail($id)->delete();

        return back()->with('delete','Blog Deleted Successfull');
    }
}

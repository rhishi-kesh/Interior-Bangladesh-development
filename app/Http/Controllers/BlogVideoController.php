<?php

namespace App\Http\Controllers;

use App\Models\BlogVideo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogVideoController extends Controller
{
    function blog_video(Request $request){
        $contents = BlogVideo::paginate('10');
        return view('backend.pages.blog.video.blog_video', compact('contents'));
    }
    function blog_video_post(Request $request){
        $rules = [
            'blog_title'=>'required',
            'video_link' => 'required',
            'blog_subtitle'=>'required',
        ];
        $cm = [
            'blog_title.required'=>'Blog Title feild is empty',
            'blog_subtitle.required'=>'Blog Subtitle feild is empty',
            'video_link.required'=>'Blog Video Link feild is empty',
        ];

        $this->validate($request, $rules, $cm);

        $title = $request->blog_title;
        $slug = str_replace(' ', '-', $title);

        BlogVideo::insert([
            'blog_title' => $request->blog_title,
            'blog_subtitle' => $request->blog_subtitle,
            'video_link' => $request->video_link,
            'slug' => $slug,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success','Blog Add Successfull');
    }
    function blog_videoedit($id){
        $contents = BlogVideo::findOrFail($id);
        return view('backend.pages.blog.video.blog_video_edit', compact('contents'));
    }
    function blog_videoupdate(Request $request){
        $rules = [
            'blog_title'=>'required',
            'video_link' => 'required',
            'blog_subtitle'=>'required',
        ];
        $cm = [
            'blog_title.required'=>'Blog Title feild is empty',
            'blog_subtitle.required'=>'Blog Subtitle feild is empty',
            'video_link.required'=>'Blog Video Link feild is empty',
        ];

        $this->validate($request, $rules, $cm);

        $id = $request->id;

        BlogVideo::where('id',$id)->update([
            'blog_title' => $request->blog_title,
            'blog_subtitle' => $request->blog_subtitle,
            'video_link' => $request->video_link,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('blog_video')->with('success','Service Updated Successfull');
    }
    function blog_videodelete($id){

        BlogVideo::findOrFail($id)->delete();

        return back()->with('delete','Blog Deleted Successfull');
    }
}

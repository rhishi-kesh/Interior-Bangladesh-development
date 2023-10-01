<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MailController;
use App\Mail\ContactPageMail;
use App\Mail\Newsletter;
use App\Models\About;
use App\Models\BlogContent;
use App\Models\BlogVideo;
use App\Models\ClientReview;
use App\Models\Clients;
use App\Models\ContactMassage;
use App\Models\Gallery_Category;
use App\Models\GalleryImage;
use App\Models\Newsletter as ModelsNewsletter;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    function notfound(){
        return view('notfound');
    }
    function main(){
        $title = '';
        $sliders = Slider::get();
        $about = About::first();
        $services = Service::take('3')->get();
        $clients = Clients::get();
        $teams = Team::take('3')->get();
        $blogs = BlogContent::take('3')->get();
        $reviews = ClientReview::get();
        return view('forntend.pages.index', compact('sliders','about','services','clients','teams','blogs','reviews'));
    }
    function about(){
        $title = 'About';
        $about = About::first();
        return view('forntend.pages.about', compact('about','title'));
    }
    function service(){
        $title = 'Service';
        $services = Service::get();
        return view('forntend.pages.service', compact('services', 'title'));
    }
    function contact(){
        $title = 'Contact';
        return view('forntend.pages.contact', compact('title'));
    }
    function contact_send(Request $request){
        $validated = $request->validate([
            'name' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            'phone' => 'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'message' => 'required'
        ]);
        $details =[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        $to = 'interiorbangladesh724@gmail.com';

        $massage = Mail::to($to)->send(new \App\Mail\ContactPageMail($details));
        if($massage){
            ContactMassage::insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'massage' => $request->message,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success', 'Massage Send Successfull');
    }
    function gallery(){
        $title = 'Gallery';
        $categorys = Gallery_Category::get();
        $gallery_images = GalleryImage::get();
        return view('forntend.pages.gallery', compact('categorys', 'gallery_images', 'title'));
    }
    function team(){
        $title = 'Team';
        $teams = Team::get();
        return view('forntend.pages.team', compact('teams', 'title'));
    }
    function content_blog(){
        $title = 'Blog Content';
        $content_blogs = BlogContent::paginate('8');
        return view('forntend.pages.content_blog', compact('title','content_blogs'));
    }
    function video_blog(){
        $title = 'Blog Video';
        $video_blogs = BlogVideo::paginate('8');
        //https://www.youtube.com/embed/aPUVUrS2oC0?si=F579yox9nuRApJda
        //https://youtu.be/0gfEFcyD0vg?si=gEe1_2fC6m54bg_B
        return view('forntend.pages.video_blog', compact('title','video_blogs'));
    }
    function privacy_policy(){
        $title = 'Privacy Policy';
        return view('forntend.pages.privacy_policy', compact('title'));
    }
    function terms_of_service(){
        $title = 'Terms Of Service';
        return view('forntend.pages.terms', compact('title'));
    }
    function singleservice($slug){
        $title = $slug;
        $service_category = Service::get();
        $procuct = Service::where('slug', $slug)->firstOrFail();
        return view('forntend.pages.single_service', compact('procuct', 'service_category', 'title'));
    }
    function singlecontentblog($slug){
        $title = $slug;
        $content_blogs = BlogContent::where('slug', $slug)->firstOrFail();
        $recent_posts = BlogContent::limit(3)->get();
        return view('forntend.pages.single_content_blog', compact('content_blogs', 'recent_posts', 'title'));
    }
    function singlevideoblog($slug){
        $title = $slug;
        $video_blogs = BlogVideo::where('slug', $slug)->firstOrFail();
        $recent_posts = BlogVideo::limit(3)->get();
        return view('forntend.pages.single_video_blog', compact('video_blogs', 'recent_posts', 'title'));
    }
    function newsletter(Request $request){

        $validated = $request->validate([
            'email' => 'required|email|max: 255'
        ]);
        $details =[
            'email' => $request->email
        ];

        $massage = Mail::to($request->email)->send(new \App\Mail\Newsletter($details));
        if($massage){
            ModelsNewsletter::insert([
                'gmail' => $request->email,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success', 'Thanks for subscribe us.');
    }
}

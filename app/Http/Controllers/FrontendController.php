<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\BlogContent;
use App\Models\BlogVideo;
use App\Models\ClientReview;
use App\Models\Clients;
use App\Models\Gallery_Category;
use App\Models\GalleryImage;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function main(){
        $title = '';
        $sliders = Slider::get();
        $about = About::first();
        $services = Service::limit('3')->get();
        $clients = Clients::get();
        $teams = Team::limit('3')->get();
        $blogs = BlogContent::limit('3')->get();
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
        $service_category = Service::get();
        $procuct = Service::where('slug', $slug)->firstOrFail();
        return view('forntend.pages.single_service', compact('procuct', 'service_category'));
    }
    function singlecontentblog($slug){
        $content_blog = BlogContent::where('slug', $slug)->firstOrFail();
        $recent_posts = BlogContent::limit(3)->get();
        return view('forntend.pages.single_content_blog', compact('content_blog', 'recent_posts'));
    }
    function singlevideoblog($slug){
        $video_blog = BlogVideo::where('slug', $slug)->firstOrFail();
        $recent_posts = BlogVideo::limit(3)->get();
        return view('forntend.pages.single_video_blog', compact('video_blog', 'recent_posts'));
    }
}

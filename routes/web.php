<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\ClientsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\FrontendController::class, 'main'])->name('main');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about_page');
Route::get('/service', [App\Http\Controllers\FrontendController::class, 'service'])->name('service_page');
Route::get('/service/item/{slug}', [App\Http\Controllers\FrontendController::class, 'singleservice'])->name('singleservice');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact_page');
Route::get('/gallery', [App\Http\Controllers\FrontendController::class, 'gallery'])->name('gallery_page');
Route::get('/team', [App\Http\Controllers\FrontendController::class, 'team'])->name('team_page');
Route::get('/content-blog', [App\Http\Controllers\FrontendController::class, 'content_blog'])->name('content_blog_page');
Route::get('/video-blog', [App\Http\Controllers\FrontendController::class, 'video_blog'])->name('video_blog_page');
Route::get('/content-blog/item/{slug}', [App\Http\Controllers\FrontendController::class, 'singlecontentblog'])->name('singlecontentblog');
Route::get('/video-blog/item/{slug}', [App\Http\Controllers\FrontendController::class, 'singlevideoblog'])->name('singlevideoblog');
Route::get('/privacy-policy', [App\Http\Controllers\FrontendController::class, 'privacy_policy'])->name('privacy_policy_page');
Route::get('/terms-of-service', [App\Http\Controllers\FrontendController::class, 'terms_of_service'])->name('terms_of_service_page');
Auth::routes();

Route::middleware(['auth'])->group(function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //about
    Route::get('/dashboard-about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
    Route::post('/update-about', [App\Http\Controllers\AboutController::class, 'updateabout'])->name('updateabout');

    //sliders
    Route::get('/add-slide', [App\Http\Controllers\SliderController::class, 'addslide'])->name('add-slide');
    Route::post('/add-slide-post', [App\Http\Controllers\SliderController::class, 'addsliderpost'])->name('add-sliderpost');
    Route::get('/dashboard-sliders', [App\Http\Controllers\SliderController::class, 'sliders'])->name('sliders');
    Route::get('/slide-edit/{id}', [App\Http\Controllers\SliderController::class, 'slideedit'])->name('slideedit');
    Route::post('/update-slide-post', [App\Http\Controllers\SliderController::class, 'updateslide'])->name('updateslide');
    Route::get('/slide-delete/{id}', [App\Http\Controllers\SliderController::class, 'slidedelete'])->name('slidedelete');

    //service
    Route::get('/add-service', [App\Http\Controllers\ServiceController::class, 'addservice'])->name('add-service');
    Route::post('/add-service-post', [App\Http\Controllers\ServiceController::class, 'addservicepost'])->name('add-servicepost');
    Route::get('/dashboard-services', [App\Http\Controllers\ServiceController::class, 'services'])->name('services');
    Route::get('/service-edit/{id}', [App\Http\Controllers\ServiceController::class, 'serviceedit'])->name('serviceedit');
    Route::post('/update-service-post', [App\Http\Controllers\ServiceController::class, 'updateservice'])->name('updateservice');
    Route::get('/service-delete/{id}', [App\Http\Controllers\ServiceController::class, 'servicedelete'])->name('servicedelete');

    //Team
    Route::get('/add-team', [App\Http\Controllers\TeamController::class, 'addteam'])->name('add-team');
    Route::post('/add-team-post', [App\Http\Controllers\TeamController::class, 'addteampost'])->name('add-addteampost');
    Route::get('/dashboard-team', [App\Http\Controllers\TeamController::class, 'team'])->name('team');
    Route::get('/team-edit/{id}', [App\Http\Controllers\TeamController::class, 'teamedit'])->name('teamedit');
    Route::post('/update-team-post', [App\Http\Controllers\TeamController::class, 'updateteam'])->name('updateteam');
    Route::get('/team-delete/{id}', [App\Http\Controllers\TeamController::class, 'teamdelete'])->name('teamdelete');

    //Client Review
    Route::get('/add-review', [App\Http\Controllers\ClientReviewController::class, 'addreview'])->name('addreview');
    Route::post('/add-review-post', [App\Http\Controllers\ClientReviewController::class, 'addreviewpost'])->name('addreviewpost');
    Route::get('/dashboard-review', [App\Http\Controllers\ClientReviewController::class, 'review'])->name('review');
    Route::get('/review-edit/{id}', [App\Http\Controllers\ClientReviewController::class, 'reviewedit'])->name('reviewedit');
    Route::post('/update-review-post', [App\Http\Controllers\ClientReviewController::class, 'updatereview'])->name('updatereview');
    Route::get('/review-delete/{id}', [App\Http\Controllers\ClientReviewController::class, 'reviewdelete'])->name('reviewdelete');

    //Client Review
    Route::get('/add-client', [App\Http\Controllers\ClientsController::class, 'addclient'])->name('addclient');
    Route::post('/add-client-post', [App\Http\Controllers\ClientsController::class, 'addclientpost'])->name('addclientpost');
    Route::get('/dashboard-client', [App\Http\Controllers\ClientsController::class, 'client'])->name('client');
    Route::get('/client-edit/{id}', [App\Http\Controllers\ClientsController::class, 'clientedit'])->name('clientedit');
    Route::post('/update-client-post', [App\Http\Controllers\ClientsController::class, 'clientreview'])->name('clientreview');
    Route::get('/client-delete/{id}', [App\Http\Controllers\ClientsController::class, 'clientdelete'])->name('clientdelete');

    //Gallery Category
    Route::post('/add-gallery_category-post', [App\Http\Controllers\Gallery_CategoryController::class, 'gallery_category_post'])->name('gallery_category_post');
    Route::get('/dashboard-gallery_category', [App\Http\Controllers\Gallery_CategoryController::class, 'gallery_category'])->name('gallery_category');
    Route::post('/update-gallery_category-post', [App\Http\Controllers\Gallery_CategoryController::class, 'gallery_categoryupdate'])->name('gallery_categoryupdate');
    Route::get('/gallery_category-delete/{id}', [App\Http\Controllers\Gallery_CategoryController::class, 'gallery_categorydelete'])->name('gallery_categorydelete');

    //Gallery Image
    Route::get('/add-image', [App\Http\Controllers\GalleryImageController::class, 'addimage'])->name('addimage');
    Route::post('/add-image-post', [App\Http\Controllers\GalleryImageController::class, 'addimagepost'])->name('addimagepost');
    Route::get('/dashboard-image', [App\Http\Controllers\GalleryImageController::class, 'images'])->name('images');
    Route::get('/image-edit/{id}', [App\Http\Controllers\GalleryImageController::class, 'imageedit'])->name('imageedit');
    Route::post('/update-image-post', [App\Http\Controllers\GalleryImageController::class, 'imageupdate'])->name('imageupdate');
    Route::get('/image-delete/{id}', [App\Http\Controllers\GalleryImageController::class, 'imagedelete'])->name('imagedelete');

    //Blog Content
    Route::post('/add-content-blog-post', [App\Http\Controllers\BlogContentController::class, 'blog_content_post'])->name('blog_content_post');
    Route::get('/dashboard-content-blog', [App\Http\Controllers\BlogContentController::class, 'blog_content'])->name('blog_content');
    Route::get('/update-content-blog-edit/{id}', [App\Http\Controllers\BlogContentController::class, 'blog_contentedit'])->name('blog_contentedit');
    Route::post('/update-content-blog-post', [App\Http\Controllers\BlogContentController::class, 'blog_contentupdate'])->name('blog_contentupdate');
    Route::get('/content-blog-delete/{id}', [App\Http\Controllers\BlogContentController::class, 'blog_contentdelete'])->name('blog_contentdelete');

    //Blog Video
    Route::post('/add-video-blog-post', [App\Http\Controllers\BlogVideoController::class, 'blog_video_post'])->name('blog_video_post');
    Route::get('/dashboard-video-blog', [App\Http\Controllers\BlogVideoController::class, 'blog_video'])->name('blog_video');
    Route::get('/update-video-blog-edit/{id}', [App\Http\Controllers\BlogVideoController::class, 'blog_videoedit'])->name('blog_videoedit');
    Route::post('/update-video-blog-post', [App\Http\Controllers\BlogVideoController::class, 'blog_videoupdate'])->name('blog_videoupdate');
    Route::get('/video-blog-delete/{id}', [App\Http\Controllers\BlogVideoController::class, 'blog_videodelete'])->name('blog_videodelete');


    //user-profile
    Route::get('/edit-profile', [App\Http\Controllers\ProfileController::class, 'edit_profile'])->name('edit_profile');
    Route::post('/update-image', [App\Http\Controllers\ProfileController::class, 'update_image'])->name('update_image');
    Route::post('/update-information', [App\Http\Controllers\ProfileController::class, 'update_information'])->name('update_information');
    Route::post('/change-password', [App\Http\Controllers\ProfileController::class, 'change_password'])->name('change_password');
});

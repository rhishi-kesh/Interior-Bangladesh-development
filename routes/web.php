<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ClientReviewController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//about
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::post('/update-about', [App\Http\Controllers\AboutController::class, 'updateabout'])->name('updateabout');

//sliders
Route::get('/add-slide', [App\Http\Controllers\SliderController::class, 'addslide'])->name('add-slide');
Route::post('/add-slide-post', [App\Http\Controllers\SliderController::class, 'addsliderpost'])->name('add-sliderpost');
Route::get('/sliders', [App\Http\Controllers\SliderController::class, 'sliders'])->name('sliders');
Route::get('/slide-edit/{id}', [App\Http\Controllers\SliderController::class, 'slideedit'])->name('slideedit');
Route::post('/update-slide-post', [App\Http\Controllers\SliderController::class, 'updateslide'])->name('updateslide');
Route::get('/slide-delete/{id}', [App\Http\Controllers\SliderController::class, 'slidedelete'])->name('slidedelete');

//service
Route::get('/add-service', [App\Http\Controllers\ServiceController::class, 'addservice'])->name('add-service');
Route::post('/add-service-post', [App\Http\Controllers\ServiceController::class, 'addservicepost'])->name('add-servicepost');
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'services'])->name('services');
Route::get('/service-edit/{id}', [App\Http\Controllers\ServiceController::class, 'serviceedit'])->name('serviceedit');
Route::post('/update-service-post', [App\Http\Controllers\ServiceController::class, 'updateservice'])->name('updateservice');
Route::get('/service-delete/{id}', [App\Http\Controllers\ServiceController::class, 'servicedelete'])->name('servicedelete');

//Team
Route::get('/add-team', [App\Http\Controllers\TeamController::class, 'addteam'])->name('add-team');
Route::post('/add-team-post', [App\Http\Controllers\TeamController::class, 'addteampost'])->name('add-addteampost');
Route::get('/team', [App\Http\Controllers\TeamController::class, 'team'])->name('team');
Route::get('/team-edit/{id}', [App\Http\Controllers\TeamController::class, 'teamedit'])->name('teamedit');
Route::post('/update-team-post', [App\Http\Controllers\TeamController::class, 'updateteam'])->name('updateteam');
Route::get('/team-delete/{id}', [App\Http\Controllers\TeamController::class, 'teamdelete'])->name('teamdelete');

//Client Review
Route::get('/add-review', [App\Http\Controllers\ClientReviewController::class, 'addreview'])->name('addreview');
Route::post('/add-review-post', [App\Http\Controllers\ClientReviewController::class, 'addreviewpost'])->name('addreviewpost');
Route::get('/review', [App\Http\Controllers\ClientReviewController::class, 'review'])->name('review');
Route::get('/review-edit/{id}', [App\Http\Controllers\ClientReviewController::class, 'reviewedit'])->name('reviewedit');
Route::post('/update-review-post', [App\Http\Controllers\ClientReviewController::class, 'updatereview'])->name('updatereview');
Route::get('/review-delete/{id}', [App\Http\Controllers\ClientReviewController::class, 'reviewdelete'])->name('reviewdelete');

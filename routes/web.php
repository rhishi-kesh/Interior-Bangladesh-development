<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;

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
Route::get('/service-edit/{id}', [App\Http\Controllers\ServiceController::class, 'serviceedit'])->name('slideedit');
Route::post('/update-service-post', [App\Http\Controllers\ServiceController::class, 'updateservice'])->name('updateservice');
Route::get('/service-delete/{id}', [App\Http\Controllers\ServiceController::class, 'servicedelete'])->name('servicedelete');

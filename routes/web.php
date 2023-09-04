<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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

//sliders
Route::get('/add-slide', [App\Http\Controllers\SliderController::class, 'addslide'])->name('add-slide');
Route::post('/add-slide-post', [App\Http\Controllers\SliderController::class, 'addsliderpost'])->name('add-sliderpost');
Route::get('/sliders', [App\Http\Controllers\SliderController::class, 'sliders'])->name('sliders');
Route::get('/slide-edit/{id}', [App\Http\Controllers\SliderController::class, 'slideedit'])->name('slideedit');
Route::post('/update-slide-post', [App\Http\Controllers\SliderController::class, 'updateslide'])->name('updateslide');

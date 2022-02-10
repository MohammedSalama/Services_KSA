<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ScreenController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileUploadController;
use App\Models\Slider;
use App\Models\About;
use App\Models\Screen;
use App\Models\Service;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * Authentications Admin
 */
Route::get('/', function () {
    return view('auth.login');
});

/*
 * Website User
 */
Route::get('/', function () {
    $slider = Slider::first();
    $about = About::first();
    $screen = Screen::first();
    return view('layouts.website.master',compact('slider','about','screen'));
})->name('service');
/*
 * Routing Website
 */
Route::get('service',[ServiceController::class,'index'])->name('service.index');
Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
Route::get('service/update/{id}',[ServiceController::class,'update'])->name('service.update');
Route::post('service/destroy',[ServiceController::class,'destroy'])->name('service.destroy');
/*
 * Dashboard Admin
 */
Route::get('/admin_dashboard', function () {
    return view('layouts.service.admin_dashboard');
})->middleware(['auth'])->name('admin_dashboard');

//Route::resource('slider',SliderController::class);
Route::get('slider',[SliderController::class,'index'])->name('slider.index');
Route::post('slider/{id}',[SliderController::class,'update'])->name('slider.update');

//Route::resource('about',AboutController::class);
Route::get('about',[AboutController::class,'index'])->name('about.index');
Route::post('about/{id}',[AboutController::class,'update'])->name('about.update');

//Route::resource('screen',AboutController::class);
Route::get('screen',[ScreenController::class,'index'])->name('screen.index');
Route::post('screen/{id}',[ScreenController::class,'update'])->name('screen.update');

//Route::resource('file_upload',FileUploadController::class);
Route::get('file_upload', [FileUploadController::class, 'fileUpload'])->name('file_upload');
Route::post('file_upload', [FileUploadController::class, 'fileUploadPost'])->name('file_upload.add');



require __DIR__.'/auth.php';

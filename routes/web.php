<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\OccasionController;
use App\Http\Controllers\backend\RegularController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TourController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/special',[HomeController::class,'special'])->name('fspecial');
Route::get('/occasion',[HomeController::class,'occasion'])->name('occasion');
Route::get('/regular',[HomeController::class,'regular'])->name('regular');
Route::get('/tour',[HomeController::class,'tour'])->name('tour');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/insert',[DashboardController::class,'special'])->name('special');
    Route::post('/insert/special',[DashboardController::class,'insert'])->name('insert');
    Route::get('/show/special',[DashboardController::class,'manage'])->name('manage');
    Route::get('/destroy/{x}/picture',[DashboardController::class,'destroy'])->name('destroy');
    Route::get('/edit/{id}/picture',[DashboardController::class,'edit'])->name('edit');
    Route::post('/update/{id}/picture',[DashboardController::class,'update'])->name('update');

    // slider
    Route::get('/slider',[SliderController::class,'slider'])->name('slider');
    Route::post('/slider/insert',[SliderController::class,'insert'])->name('slider.insert');
    Route::get('/slider/manage',[SliderController::class,'manage'])->name('slider.manage');
    Route::get('/slider/{x}/destroy',[SliderController::class,'destroy'])->name('slider.destroy');
    Route::get('/slider/{id}/edit',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('/slider/{id}/update',[SliderController::class,'update'])->name('slider.update');

    // occasion
    Route::get('/occasion',[OccasionController::class,'show'])->name('occasion');
    Route::post('/occasion/insert',[OccasionController::class,'insert'])->name('occasion.insert');
    Route::get('/occasion/manage',[OccasionController::class,'manage'])->name('omanage');
    Route::get('/occasion/{x}/destroy',[OccasionController::class,'destroy'])->name('occasion.destroy');
    Route::get('/occasion/{id}/edit',[OccasionController::class,'edit'])->name('occasion.edit');
    Route::post('/ocasion/{id}/update',[OccasionController::class,'update'])->name('oupdate');

    //Regular
    Route::get('/regular',[RegularController::class,'show'])->name('regular');
    Route::post('/regular/insert',[RegularController::class,'insert'])->name('regular.insert');
    Route::get('/regular/manage',[RegularController::class,'manage'])->name('rmanage');
    Route::get('/regular/{x}/destroy',[RegularController::class,'destroy'])->name('regular.destroy');
    Route::get('/regular/{id}/edit',[RegularController::class,'edit'])->name('regular.edit');
    Route::post('/regular/{id}/update',[RegularController::class,'update'])->name('regular.update');

    //Tour
    Route::get('/tour',[TourController::class,'show'])->name('tour');
    Route::post('/tour/insert',[TourController::class,'insert'])->name('tour.insert');
    Route::get('/tour/manage',[TourController::class,'manage'])->name('tmanage');
    Route::get('/tour/{x}/destroy',[TourController::class,'destroy'])->name('tour.destroy');
    Route::get('/tour/{id}/edit',[TourController::class,'edit'])->name('tour.edit');
    Route::post('/tour/{id}/update',[TourController::class,'update'])->name('tour.update');



});

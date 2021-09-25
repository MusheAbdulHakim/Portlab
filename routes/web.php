<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ResumeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\PortfolioController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('',[HomeController::class,'index'])->name('home');
    Route::get('home',[HomeController::class,'index']);

    Route::get('services',[ServiceController::class,'index'])->name('services');
    Route::get('resume',[ResumeController::class,'index'])->name('resume');
    Route::get('portfolio',[PortfolioController::class,'index'])->name('portfolio');
    Route::get('portfolio-details',[PortfolioController::class,'single'])->name('portfolio-details');

    Route::get('blog',[BlogController::class,'index'])->name('blog');
    Route::get('blog/{article}',[BlogController::class,'single'])->name('article');

    Route::get('contact',[ContactController::class,'index'])->name('contact');
    Route::post('contact',[ContactController::class,'store']);

});




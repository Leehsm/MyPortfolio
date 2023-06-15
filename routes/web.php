<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ResumeController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\SocmedController;

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

Route::get('/', function () {
    return view('welcome');
});


//Backend
Route::get('/hihi', function () {
    return view('backend/welcome');
});


//Home
Route::get('/home', [HomeController::class, 'home'])->name('home');


//About
Route::get('/about-view', [AboutController::class, 'View'])->name('about-view');
Route::get('/about-add', [AboutController::class, 'Add'])->name('about-add');
Route::get('/about-edit', [AboutController::class, 'Edit'])->name('about-edit');


//Contact
Route::get('/contact-view', [ContactController::class, 'View'])->name('contact-view');
Route::get('/contact-add', [ContactController::class, 'Add'])->name('contact-add');
Route::get('/contact-edit', [ContactController::class, 'Edit'])->name('contact-edit');


//Portfolio
Route::get('/portfolio-view', [PortfolioController::class, 'View'])->name('portfolio-view');
Route::get('/portfolio-add', [PortfolioController::class, 'Add'])->name('portfolio-add');
Route::get('/portfolio-edit', [PortfolioController::class, 'Edit'])->name('portfolio-edit');


//Resume
Route::get('/resume-view', [ResumeController::class, 'View'])->name('resume-view');
Route::get('/resume-add', [ResumeController::class, 'Add'])->name('resume-add');
Route::get('/resume-edit', [ResumeController::class, 'Edit'])->name('resume-edit');


//Social Media
Route::get('/socmed-view', [SocmedController::class, 'View'])->name('socmed-view');
Route::get('/socmed-add', [SocmedController::class, 'Add'])->name('socmed-add');
Route::get('/socmed-edit', [SocmedController::class, 'Edit'])->name('socmed-edit');
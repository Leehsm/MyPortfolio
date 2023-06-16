<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ResumeController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\SocmedController;
use App\Http\Controllers\Backend\SkillController;

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
Route::post('/about-store', [AboutController::class, 'Store'])->name('about-store');
Route::get('/about-edit/{id}', [AboutController::class, 'Edit'])->name('about-edit');
Route::post('/about-update', [AboutController::class, 'Update'])->name('about-update');

//Skill
Route::post('/skill-add', [SkillController::class, 'Add'])->name('skill-add');
Route::post('/skill-store', [SkillController::class, 'Store'])->name('skill-store');
Route::get('/skill-edit', [SkillController::class, 'Edit'])->name('skill-edit');


//Contact
Route::get('/contact-view', [ContactController::class, 'View'])->name('contact-view');
Route::get('/contact-add', [ContactController::class, 'Add'])->name('contact-add');
Route::post('/contact-store', [AboutController::class, 'Store'])->name('contact-store');
Route::get('/contact-edit', [ContactController::class, 'Edit'])->name('contact-edit');


//Portfolio
Route::get('/portfolio-view', [PortfolioController::class, 'View'])->name('portfolio-view');
Route::post('/portfolio-add', [PortfolioController::class, 'Add'])->name('portfolio-add');
Route::post('/portfolio-store', [AboutController::class, 'Store'])->name('portfolio-store');
Route::get('/portfolio-edit', [PortfolioController::class, 'Edit'])->name('portfolio-edit');


//Resume
Route::get('/resume-view', [ResumeController::class, 'View'])->name('resume-view');
Route::get('/resume-Descadd', [ResumeController::class, 'DescAdd'])->name('resume-Descadd');
Route::post('/resume-Descstore', [AboutController::class, 'DescStore'])->name('resume-Descstore');
Route::get('/resume-Descedit/{id}', [ResumeController::class, 'DescEdit'])->name('resume-Descedit');

// Route::get('/resume-Summaryview', [ResumeController::class, 'SummaryView'])->name('resume-Summaryview');
Route::get('/resume-Summaryadd', [ResumeController::class, 'SummaryAdd'])->name('resume-Summaryadd');
Route::post('/resume-Summarystore', [AboutController::class, 'SummaryStore'])->name('resume-Summarystore');
Route::get('/resume-Summaryedit/{id}', [ResumeController::class, 'SummaryEdit'])->name('resume-Summaryedit');

// Route::get('/resume-Eduview', [ResumeController::class, 'EduView'])->name('resume-Eduview');
Route::get('/resume-Eduadd', [ResumeController::class, 'EduAdd'])->name('resume-Eduadd');
Route::post('/resume-Edustore', [AboutController::class, 'EduStore'])->name('resume-Edustore');
Route::get('/resume-Eduedit/{id}', [ResumeController::class, 'EduEdit'])->name('resume-Eduedit');

// Route::get('/resume-Expview', [ResumeController::class, 'ExpView'])->name('resume-Expview');
Route::get('/resume-Expadd', [ResumeController::class, 'ExpAdd'])->name('resume-Expadd');
Route::post('/resume-Expstore', [AboutController::class, 'ExpStore'])->name('resume-Expstore');
Route::get('/resume-Expedit/{id}', [ResumeController::class, 'ExpEdit'])->name('resume-Expedit');


//Social Media
Route::get('/socmed-view', [SocmedController::class, 'View'])->name('socmed-view');
Route::post('/socmed-add', [SocmedController::class, 'Add'])->name('socmed-add');
Route::post('/socmed-store', [AboutController::class, 'Store'])->name('about-store');
Route::get('/socmed-edit', [SocmedController::class, 'Edit'])->name('socmed-edit');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
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
Route::get('/', [IndexController::class, 'Index']);
// Route::post('/', [IndexController::class, 'Message'])->name('message');


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
Route::get('/about-edit', [AboutController::class, 'Edit'])->name('about-edit');
Route::post('/about-update', [AboutController::class, 'Update'])->name('about-update');

//Skill
Route::get('/skill-view', [SkillController::class, 'View'])->name('skill-view');
Route::get('/skill-add', [SkillController::class, 'Add'])->name('skill-add');
Route::post('/skill-store', [SkillController::class, 'Store'])->name('skill-store');
Route::get('/skill-edit/{id}', [SkillController::class, 'Edit'])->name('skill-edit');
Route::post('/skill-update', [SkillController::class, 'Update'])->name('skill-update');

//Resume
Route::get('/resume-view', [ResumeController::class, 'View'])->name('resume-view');
Route::get('/resume-Descadd', [ResumeController::class, 'DescAdd'])->name('resume-Descadd');
Route::post('/resume-Descstore', [ResumeController::class, 'DescStore'])->name('resume-Descstore');
Route::get('/resume-Descedit/{id}', [ResumeController::class, 'DescEdit'])->name('resume-Descedit');
Route::post('/resume-Descupdate', [ResumeController::class, 'DescUpdate'])->name('resume-Descupdate');

Route::get('/resume-Summaryadd', [ResumeController::class, 'SummaryAdd'])->name('resume-Summaryadd');
Route::post('/resume-Summarystore', [ResumeController::class, 'SummaryStore'])->name('resume-Summarystore');
Route::get('/resume-Summaryedit/{id}', [ResumeController::class, 'SummaryEdit'])->name('resume-Summaryedit');
Route::post('/resume-Summaryupdate', [ResumeController::class, 'SummaryUpdate'])->name('resume-Summaryupdate');

Route::get('/resume-Eduadd', [ResumeController::class, 'EduAdd'])->name('resume-Eduadd');
Route::post('/resume-Edustore', [ResumeController::class, 'EduStore'])->name('resume-Edustore');
Route::get('/resume-Eduedit/{id}', [ResumeController::class, 'EduEdit'])->name('resume-Eduedit');
Route::post('/resume-Eduupdate', [ResumeController::class, 'EduUpdate'])->name('resume-Eduupdate');

Route::get('/resume-Expadd', [ResumeController::class, 'ExpAdd'])->name('resume-Expadd');
Route::post('/resume-Expstore', [ResumeController::class, 'ExpStore'])->name('resume-Expstore');
Route::get('/resume-Expedit/{id}', [ResumeController::class, 'ExpEdit'])->name('resume-Expedit');
Route::post('/resume-Expupdate', [ResumeController::class, 'ExpUpdate'])->name('resume-Expupdate');

//Portfolio
Route::get('/portfolio-view', [PortfolioController::class, 'View'])->name('portfolio-view');
Route::get('/portfolio-add', [PortfolioController::class, 'Add'])->name('portfolio-add');
Route::post('/portfolio-store', [PortfolioController::class, 'Store'])->name('portfolio-store');
Route::get('/portfolio-edit/{id}', [PortfolioController::class, 'Edit'])->name('portfolio-edit'); //tukar post
Route::post('/portfolio-update', [PortfolioController::class, 'Update'])->name('portfolio-update');

Route::get('/portfolio-projadd', [PortfolioController::class, 'ProjAdd'])->name('portfolio-projadd');
Route::post('/portfolio-projstore', [PortfolioController::class, 'ProjStore'])->name('portfolio-projstore');
Route::get('/portfolio-projedit/{id}', [PortfolioController::class, 'ProjEdit'])->name('portfolio-projedit');
Route::post('/portfolio-projupdate', [PortfolioController::class, 'ProjUpdate'])->name('portfolio-projupdate');

//Contact
Route::get('/contact-view', [ContactController::class, 'View'])->name('contact-view');
Route::get('/contact-add', [ContactController::class, 'Add'])->name('contact-add');
Route::post('/contact-store', [ContactController::class, 'Store'])->name('contact-store');
Route::get('/contact-edit/{id}', [ContactController::class, 'Edit'])->name('contact-edit');
Route::post('/contact-update', [ContactController::class, 'Update'])->name('contact-update');

//Social Media
Route::get('/socmed-view', [SocmedController::class, 'View'])->name('socmed-view');
Route::get('/socmed-add', [SocmedController::class, 'Add'])->name('socmed-add');
Route::post('/socmed-store', [SocmedController::class, 'Store'])->name('socmed-store');
Route::get('/socmed-edit/{id}', [SocmedController::class, 'Edit'])->name('socmed-edit');
Route::post('/socmed-update', [SocmedController::class, 'Update'])->name('socmed-update');


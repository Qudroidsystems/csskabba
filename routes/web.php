<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;


// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/vision', [AboutController::class, 'vision'])->name('vision');
Route::get('/anthem', [AboutController::class, 'anthem'])->name('anthem');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/philip', [TeamController::class, 'philip'])->name('philip');
Route::get('/kofoworola', [TeamController::class, 'kofoworola'])->name('kofoworola');
Route::get('/grace', [TeamController::class, 'grace'])->name('grace');
Route::get('/schools', [ServicesController::class, 'index'])->name('schools');
Route::get('/admission', [ServicesController::class, 'admission'])->name('admission');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');



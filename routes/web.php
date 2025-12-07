<?php

use Illuminate\Support\Facades\Route;
use App\Models\SliderItem;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/haberdetay/{slug}', [HomeController::class, 'show'])->name('news.show');
Route::get('/proje/{slug}', [HomeController::class, 'project'])->name('projects.show');
Route::get('/api/karatay-tv/latest', [HomeController::class, 'karatayTvLatest'])->name('karatay.tv.latest');
Route::get('/api/instagram/latest', [HomeController::class, 'instagramLatest'])->name('instagram.latest');

// Department dynamic page
Route::get('/mudurluk/{mudurluk}', [DepartmentController::class, 'show'])->name('departments.show');

// Corporate - Mayor static page
Route::get('/kurumsal/baskan', function () { return view('corporate.mayor'); });
Route::get('/kurumsal/baskanyardimcilari', function () { return view('corporate.vice-mayors'); });
Route::get('/kurumsal/meclisuyeleri', function () { return view('corporate.council-members'); });
Route::get('/kurumsal/encumenuyeleri', function () { return view('corporate.board-members'); });
Route::get('/kurumsal/mudurler', function () { return view('corporate.directors'); });
Route::get('/kurumsal/kurumsal-sema', function () { return view('corporate.corporate-schema'); });
Route::get('/kurumsal/logomuz', function () { return view('corporate.logo'); });
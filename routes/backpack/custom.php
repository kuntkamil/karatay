<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
	'prefix' => config('backpack.base.route_prefix', 'admin'),
	'middleware' => (array) config('backpack.base.web_middleware', 'web'),
], function () {
	Route::get('news/{slug}/show', [HomeController::class, 'show'])
		->where('slug', '[A-Za-z0-9-]+')
		->name('admin.news.public-show');

	Route::get('projects/{slug}/show', [HomeController::class, 'project'])
		->where('slug', '[A-Za-z0-9-]+')
		->name('admin.projects.public-show');
});

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('departments', \App\Http\Controllers\Admin\DepartmentCrudController::class);
    Route::crud('projects', \App\Http\Controllers\Admin\ProjectCrudController::class);
    Route::crud('events', \App\Http\Controllers\Admin\EventCrudController::class);
    Route::crud('news', \App\Http\Controllers\Admin\NewsCrudController::class);
    Route::crud('announcements', \App\Http\Controllers\Admin\AnnouncementCrudController::class);
    Route::crud('procurements', \App\Http\Controllers\Admin\ProcurementCrudController::class);
    Route::crud('slider-items', \App\Http\Controllers\Admin\SliderItemCrudController::class);
    Route::crud('topics', \App\Http\Controllers\Admin\TopicCrudController::class);
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */

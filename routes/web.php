<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     dd('test');
// });
Route::get('/', [RouteController::class, 'welcome']);
Route::get('/aboutme', [RouteController::class, 'aboutme']);
Route::get('/experiences/technohome', function () {return view('pages.experiences', ['section' => 'technohome']);})->name('experiences.technohome');

Route::get('/experiences/xingredient', function () {return view('pages.experiences', ['section' => 'xingredient']);})->name('experiences.xingredient');

Route::get('/experiences', function () {return view('pages.experiences', ['section' => 'technohome']);});

Route::get('/projects', [RouteController::class, 'projects']);


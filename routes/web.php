<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     dd('test');
// });
Route::get('/', [RouteController::class, 'welcome']);
Route::get('/aboutme', [RouteController::class, 'aboutme']);
Route::get('/experiences', [RouteController::class, 'experiences']);
Route::get('/projects', [RouteController::class, 'projects']);


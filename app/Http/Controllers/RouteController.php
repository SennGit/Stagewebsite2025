<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    static function welcome(){
        return view('pages.welcome');
    }
    static function aboutme(){
        return view('pages.aboutme');
    }
    static function projects(){
        return view('pages.projects');
    }
}

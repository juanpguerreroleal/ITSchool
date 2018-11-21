<?php

namespace ITSchool\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts/Main/main');
    }
    public function courses(){
        return view('/layouts/Main/courses');
    }
    public function about(){
        return view('layouts/Main/about');
    }
    public function tools(){
        return view('layouts/Main/tools');
    }
    public function perfil(){
        return view('layouts/Main/perfil');
    }
    public function updates(){
        return view('layouts/Main/updates');
    }
    public function courseHTML(){
        return view('layouts/Courses/html');
    }
    public function courseCSS(){
        return view('layouts/Courses/css');
    }
}

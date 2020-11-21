<?php

namespace App\Http\Controllers\Front\Education;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('coming-soon');
    }
    public function services(){
        return view('education.services');
    }
    public function courses(){
        return view('education.courses');
    }
}

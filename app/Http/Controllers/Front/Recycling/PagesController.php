<?php

namespace App\Http\Controllers\Front\Recycling;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('coming-soon');
    }
    public function services(){
        return view('recycling.services');
    }
    public function projects(){
        return view('recycling.projects');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }
	public function about(){
        return view('about');
    }
	public function contact(){
        return view('contact');
    }
    public function profile(){
        return view('profile');
    }
}

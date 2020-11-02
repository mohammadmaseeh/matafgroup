<?php

namespace App\Http\Controllers\Front\RoboticAgriculture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('robotic-agriculture.index');
    }
    public function services(){
        return view('robotic-agriculture.services');
    }
}

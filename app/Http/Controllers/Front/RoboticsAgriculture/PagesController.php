<?php

namespace App\Http\Controllers\Front\RoboticsAgriculture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('robotics-agriculture.index');
    }
    public function services(){
        return view('robotics-agriculture.services');
    }
}

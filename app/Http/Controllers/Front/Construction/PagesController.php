<?php

namespace App\Http\Controllers\Front\Construction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('construction.index');
    }
    public function services(){
        return view('construction.services');
    }
    public function projects(){
        return view('construction.projects');
    }
}

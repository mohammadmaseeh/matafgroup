<?php

namespace App\Http\Controllers\Front\Trading;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('trading.index');
    }
    public function services(){
        return view('recycling.services');
    }
    public function projects(){
        return view('recycling.projects');
    }
}

<?php

namespace App\Http\Controllers\Front\IT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('it.index');
    }
    public function services(){
        return view('it.services');
    }
    public function projects(){
        return view('it.projects');
    }
}

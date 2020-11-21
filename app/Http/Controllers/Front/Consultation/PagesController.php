<?php

namespace App\Http\Controllers\Front\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('coming-soon');
    }
    public function services(){
        return view('consultation.services');
    }
    public function projects(){
        return view('consultation.projects');
    }
}

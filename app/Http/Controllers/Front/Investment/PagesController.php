<?php

namespace App\Http\Controllers\Front\Investment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        return view('investment.index');
    }
}

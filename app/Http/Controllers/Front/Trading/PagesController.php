<?php

namespace App\Http\Controllers\Front\Trading;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('trading.index');
    }
    public function categories(){
        return view('trading.categories');
    }
    public function category($category){
        return view('trading.category',compact('category'));
    }
}

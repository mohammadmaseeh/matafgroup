<?php

namespace App\Http\Controllers\Front\RealEstate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('realestate.index');
    }
    public function about()
    {
        return view('realestate.about-us');
    }
    public function history()
    {
        return view('realestate.history');
    }
    public function philosophy()
    {
        return view('realestate.philosophy');
    }
    public function future()
    {
        return view('realestate.future_plan');
    }
    public function csr()
    {
        return view('realestate.csr');
    }
    public function policies()
    {
        return view('realestate.policies');
    }
    public function quality()
    {
        return view('realestate.quality_policy');
    }
    public function team()
    {
        return view('realestate.team');
    }
    public function project()
    {
        return view('realestate.project');
    }
}

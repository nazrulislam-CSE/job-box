<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Session;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $pageTitle = 'Find Your Dream Job';
        return view('frontend.home', compact('pageTitle'));
    } 
}

<?php

namespace App\Http\Controllers;
use Tests\TestCase;
use Illuminate\Http\Request;

class blogControll extends Controller
{
    public function blog(Request $request)
    {
        return view('blogView');
    }
    
    public function blogDetail(Request $request)
    {
        return view('blogDetailView');
    }
}
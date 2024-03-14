<?php

namespace App\Http\Controllers;
use Tests\TestCase;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function admin(){
        return view('adminPanel');
    }
}
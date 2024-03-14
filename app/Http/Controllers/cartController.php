<?php

namespace App\Http\Controllers;
use Tests\TestCase;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function cart(Request $request){
        return view('cart');
    }
}
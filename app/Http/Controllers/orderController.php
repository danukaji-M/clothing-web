<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function order(Request $request)
    {
        return view('checkout');
    }
}
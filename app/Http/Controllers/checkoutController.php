<?php

namespace App\Http\Controllers;
use Tests\TestCase;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function checkout(Request $request)
    {
        return view('checkout');
    }
}
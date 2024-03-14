<?php

namespace App\Http\Controllers;
use Tests\TestCase;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $req)
    {
        return view('shop');
    }
}
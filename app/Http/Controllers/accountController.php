<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    function signUp(Request $req){
        return view('createAccount');
    }
    function signIn(Request $req){
        return view('loginAcoount');
    }
}
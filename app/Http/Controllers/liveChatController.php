<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liveChatController extends Controller
{
    public function liveChat(Request $request){
        return view('liveChatuser');
    }
    
    public function liveChatAdmin(Request $request){
        return view('liveChatAdmin');
    }
    public function liveChatSeller(Request $request){
        return view('liveChatSeller');
    }
}
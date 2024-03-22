<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showUser(string $id=null){
        return view('first', compact('id'));
    }

    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function user(){
        return view('user');
    }

}

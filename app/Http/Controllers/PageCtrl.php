<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCtrl extends Controller
{
    function home () {
        return view('home');
    }
    function imprint () {
        return view('imprint');
    }
    function contact () {
        return view('contact');
    }
    function thanks () {
        return view('thanks');
    }
}

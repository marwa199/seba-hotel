<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function index(){
        return view('seba.index');
    }
    
    function about(){
        return view('seba.about');
    }
    
    function rooms(){
        return view('seba.rooms');
    }
    
    function booking(){
        return view('seba.booking');
    }
    
    function cont(){
        return view('seba.cont');
    }
}

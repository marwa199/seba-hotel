<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class receptionController extends Controller
{
    function receptionindex(){
        return view('seba.reception-index');
    }
}

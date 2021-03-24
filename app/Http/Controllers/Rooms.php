<?php

namespace App\Http\Controllers;

use App\room;
use Illuminate\Http\Request;

class Rooms extends Controller
{
    //
    function find_avaliable(){
        return view('seba.avaliable_rooms');
    }
}

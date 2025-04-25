<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    function questions(){
        return view('MyViews.PreguntasView');
    } 
}

<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    function information(){
        return view('MyViews.InformacionView');
    } 
}
<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TablaController extends Controller
{
    function table(){
        return view('MyViews.TablaView');
    } 
}

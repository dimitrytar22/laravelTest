<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $info = "This is our team. ...";
        return view("about", compact('info'));
    }
}

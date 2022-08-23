<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        $contacts = "Our numbers: +380954851741";
        return view("contacts", compact('contacts'));
    }
}

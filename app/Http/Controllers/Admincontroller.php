<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
        return view('Admin.base');
    }
    public function dashboard(){
        return("welcome");
    }

}

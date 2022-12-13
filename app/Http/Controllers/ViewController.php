<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('master');
    }
    public function home(){
        return view('home');
    }
    public function project(){
        return view('project');
    }
    public function add_data(){
        return view('add-data');
    }
    public function extra(){
        return view('extra');
    }
}

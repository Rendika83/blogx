<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function tentang(){
        return view('about');
    }

    public function sejarah(){
        return view('mains');
    }

    public function data(){
        return view('data');
    }

    public function video(){
        return view('video');
    }
}


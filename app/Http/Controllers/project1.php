<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project1 extends Controller
{
    function Home(){
        return view('latihanlayout001');
    }
    function Komponen(){
        return view('latihanlayout002');
    }
    function Code(){
        return view('latihanlayout003');
    }
    function Project(){
        return view('latihanlayout004');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function index(){
        return view("welcome");
    }
    public function satu(){
        //return "data pertama";
        $arrBuah = ["pisang","rambutan", "Duku", "jambu"];
        return view('pasarBuah')->with('pasarBuah',$arrBuah);   
    }
}

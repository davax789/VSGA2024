<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class halloController extends Controller
{
    public function hello(){
            return ("Hello World");
    }
    public function hellow(){
        return view('blog.hellow')
        ->with  ('name','ando')
        ->with ('pekerjaan','dosen');

}
}
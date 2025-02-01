<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        return view('demo',['name'=>'Navbar']);
    } 
    // public function ind(){
    //     return view('demo',['info'=>'the info']);
    // } 
}

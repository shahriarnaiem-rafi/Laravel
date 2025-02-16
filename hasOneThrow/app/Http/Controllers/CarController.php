<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;

class CarController extends Controller
{
    public function index(){
        $mechanic=Mechanic::with('carOwner')->get();
        // return $mechanic;
        return view('welcome',compact('mechanic'));
    }
  
}

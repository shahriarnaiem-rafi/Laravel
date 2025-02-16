<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;

class CarController extends Controller
{
    public function work(){
        $datas=Mechanic::with('carOwner')->get();
        return view('welcome',compact('datas'));
    }
}

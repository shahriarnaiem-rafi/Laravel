<?php

namespace App\Http\Controllers;

use App\Models\Bus;

class UserController extends Controller
{
    public function show(){
        $saoinna=Bus::with('ticket')->get();
        // dd($saoinna);
        return view('table',compact('saoinna'));
    }
}

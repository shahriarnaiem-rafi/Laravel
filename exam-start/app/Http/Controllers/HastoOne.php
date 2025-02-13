<?php

namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\Request;

class HastoOne extends Controller
{
    public function show(){
        $datas=User1::with('product')->get();
        return view('welcome',compact('datas'));

    }
}

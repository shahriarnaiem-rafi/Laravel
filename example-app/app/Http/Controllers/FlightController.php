<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\Redirect;

// Flight
class FlightController extends Controller
{
    public function show(){
        $datas= Flight::all();
        
        // dd($st->toArray());
        return view('home',compact('datas'));
    }
    public function destroy($id){

        $datas= Flight::find($id);
        
       $datas->delete();
        return Redirect::to('home');
    }
   
}

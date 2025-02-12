<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\UserModel;

class UserController extends Controller
{
    public function firstTable()
    {
        $first = UserModel::with('product')->get(); 
        // dd('first');
        return view('table', compact('first'));
    }

    // public function secondTable()
    // {
    //     $datas = ProductModel::with('user')->get(); 
    //     return view('table', compact(var_name: 'datas'));
    // }
}

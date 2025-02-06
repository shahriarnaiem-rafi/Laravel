<?php

namespace App\Http\Controllers;

use App\Models\Twofive;
use App\Models\Twofour;


class NewController extends Controller
{
    public function index()
    {
        $types = Twofive::all();
        return view('pages.aurth.manage_user', compact('types'));
    }
    public function index2()
    {
        $types = Twofive::all();
        return view('pages.payment.payament', compact('types'));
    }
}

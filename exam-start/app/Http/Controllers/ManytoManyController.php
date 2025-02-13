<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class ManytoManyController extends Controller
{
    public function showMany(){
        $subjects=Subject::with('subjectOption')->get();
        // return $subjects;
        return view('manyrelation',compact('subjects'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymptomsController extends Controller
{
    public function index(){
        return view('symptoms.symptoms');
    }
}

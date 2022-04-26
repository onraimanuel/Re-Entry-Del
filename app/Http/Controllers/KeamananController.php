<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeamananController extends Controller
{
    public function IndexKeamanan(){
        return view('Keamanan/IndexKeamanan');
    }
    public function DataKeamanan(){
        return view('Keamanan/DataKeamanan');
    }
}

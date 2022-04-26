<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupirController extends Controller
{
    public function IndexSupir(){
        return view('Supir/IndexSupir');
    }
    public function DataSupir(){
        return view('Supir/DataSupir');
    }
}

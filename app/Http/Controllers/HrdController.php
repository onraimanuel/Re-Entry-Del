<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrdController extends Controller
{
    public function IndexHrd(){
        return view('HRD/IndexHrd');
    }

    public function DataHrd(){
        return view('HRD/DataHrd');
    }
}

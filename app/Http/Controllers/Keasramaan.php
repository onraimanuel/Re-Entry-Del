<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Keasramaan extends Controller
{
    public function IndexKeasramaan(){
        return view('Keasramaan/IndexKeasramaan');
    }

    public function DataKeasramaan(){
        return view('Keasramaan/DataKeasramaan');
    }

    public function PerlengkapanKeasramaan(){
        return view('Keasramaan/PerlengkapanKeasramaan');
    }

    public function PeraturanKeasramaan(){
        return view('Keasramaan/PeraturanKeasramaan');
    }

    public function RuangKamarKeasramaan(){
        return view('Keasramaan/RuangKamarKeasramaan');
    }

}

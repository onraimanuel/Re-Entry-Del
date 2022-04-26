<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KantinController extends Controller
{
    public function IndexKantin(){
        return view('Kantin/IndexKantin');
    }

    public function DataKantin(){
        return view('Kantin/DataKantin');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\pertanyaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KlinikController extends Controller
{
    public function IndexKlinik(){
        return view('Klinik/IndexKlinik');
    }

    public function DataKlinik(){
        return view('Klinik/DataKlinik');
    }

    public function DetailKlinik(){
        $pertanyaan  = DB::table('pertanyaan') -> get();
        return view('Klinik/DetailKlinik',['pertanyaan'=>$pertanyaan]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function indexMahasiswa(){
        return view('Mahasiswa/IndexMahasiswa');
    }

    public function DataDiriMahasiswa(){
        return view('Mahasiswa/DataDiriMahasiswa');
    }

    public function RequestMahasiswa(){
        return view('Mahasiswa/RequestMahasiswa');
    }

    public function DetailRequestMahasiswa(){
        return view('Mahasiswa/DetailRequest');
    }

    public function Perlengkapan(){
        return view('Mahasiswa/PerlengkapanMahasiswa');
    }

    public function Ruang(){
        return view('Mahasiswa/RuangKamarMahasiswa');
    }

    public function Layanan(){
        return view('Mahasiswa/LayananMahasiswa');
    }

    public function Peraturan(){
        return view('Mahasiswa/PeraturanMahasiswa');
    }

    public function Login(){
        return view('Login/Login');
    }
}

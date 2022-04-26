<?php

namespace App\Http\Controllers;
use App\Models\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $PerlengkapanAspa = DB::table('Perlengkapan')->where('filter','=','aspa')->get();
        $PerlengkapanAspi = DB::table('Perlengkapan')->where('filter','=','aspi')->get();
        return view('Mahasiswa/PerlengkapanMahasiswa',['PerlengkapanAspa' => $PerlengkapanAspa],['PerlengkapanAspi' => $PerlengkapanAspi]);
    }

    public function Ruang(){
        return view('Mahasiswa/RuangKamarMahasiswa');
    }

    public function Layanan(){
        $pertanyaan  = DB::table('pertanyaan')->get();
        return view('Mahasiswa/LayananMahasiswa',['pertanyaan'=>$pertanyaan]);
    }

    public function Peraturan(){
        $peraturan = DB::table('peraturan')->orderBy('created_at','DESC')->get();
        return view('Mahasiswa/PeraturanMahasiswa',['peraturan'=>$peraturan]);
    }

    public function Login(){
        return view('Login/Login');
    }
}

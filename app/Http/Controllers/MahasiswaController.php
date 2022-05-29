<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Users;
use App\Models\Layanan;
use App\Models\re_entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class MahasiswaController extends Controller
{   
    public function __construct(){
        $this->middleware(function ($request,$next) {
            $role = Auth::user()->role;
            if($role != 0){
                abort(403);
            }
            return $next($request);
        });
    }

    public function indexMahasiswa(){
        $reentry= DB::table('re_entry')->where('user_id','=', Auth::user()->id)->get();
        return view('Mahasiswa/IndexMahasiswa',['re_entry'=> $reentry]);
    }
    public function DataDiriMahasiswa(){
        return view('Mahasiswa/DataDiriMahasiswa');
    }

    public function EditDiriMahasiswa(Request $request,$id){
        $EditData = users::where('id', $id)->first();
        $EditData->name = $request->name;
        $EditData->username = $request->username;
        $EditData->email = $request->email;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('assets/FotoProfil',$file);
            $EditData->gambar = $file;
        }
         $EditData->update();
        return redirect('/DataMahasiswa');
    }

    public function RequestMahasiswa(){
        return view('Mahasiswa/RequestMahasiswa');
    }

    public function KirimRequest(Request $request){
        $KirimRequest = new re_entry();
        $KirimRequest->user_id = Auth::user()->id;
        $KirimRequest->nama = $request->nama;
        $KirimRequest->nim = $request->nim;
        $KirimRequest->angkatan = $request -> angkatan;
        $KirimRequest->prodi = $request -> prodi;
        $KirimRequest->keperluan = $request -> keperluan;
        $KirimRequest->asal = $request -> asal;
        $KirimRequest->tanggal = $request -> tanggal;
        $KirimRequest->save();
        return redirect('/IndexMahasiswa');
    }

    public function DetailRequestMahasiswa($re_entry_id){
        $DetailReentry = re_entry::where('id',$re_entry_id)->first();
        return view('Mahasiswa/DetailRequest',compact('DetailReentry'));
    }

    public function Perlengkapan(){
        $PerlengkapanAspa = DB::table('Perlengkapan')->where('filter','=','aspa')->get();
        $PerlengkapanAspi = DB::table('Perlengkapan')->where('filter','=','aspi')->get();
        return view('Mahasiswa/PerlengkapanMahasiswa',['PerlengkapanAspa' => $PerlengkapanAspa],['PerlengkapanAspi' => $PerlengkapanAspi]);
    }

    public function Ruang(){
        $ruangkamar= DB::table('ruangkamar')->where('user_id','=', Auth::user()->id)->get();
        return view('Mahasiswa/RuangKamarMahasiswa',['ruangkamar'=> $ruangkamar]);
    }

    public function Layanan(){
        return view('Mahasiswa/LayananMahasiswa');
    }

    public function KirimFormLayanan(Request $request){
        $KirimLayanan = new Layanan();
        $KirimLayanan->nama = $request->nama;
        $KirimLayanan->nik = $request->nik;
        $KirimLayanan->angkatan = $request -> angkatan;
        $KirimLayanan->prodi = $request -> prodi;
        $KirimLayanan->tanggal = $request -> tanggal;
        $KirimLayanan->nohp = $request->nohp;
        $KirimLayanan->value1 = $request ->value1;
        $KirimLayanan->value2 = $request ->value2;
        $KirimLayanan->value3 = $request ->value3;
        $KirimLayanan->value4 = $request ->value4;
        $KirimLayanan->value5 = $request ->value5;
        $KirimLayanan->value6 = $request ->value6;
        if ($request->hasFile('fileswab')){
            $file= $request->file('fileswab')->getClientOriginalName();
            $request->file('fileswab')->move('assets/DokumenUpload',$file);
            $KirimLayanan->fileswab = $file;
        }
        if ($request->hasFile('filepersetujuan')){
            $file= $request->file('filepersetujuan')->getClientOriginalName();
            $request->file('filepersetujuan')->move('assets/DokumenUpload',$file);
            $KirimLayanan->filepersetujuan = $file;
        }
        $KirimLayanan->save();
        return redirect('/LayananMahasiswa');
    }

    public function Peraturan(){
        $peraturan = DB::table('peraturan')->orderBy('created_at','DESC')->get();
        return view('Mahasiswa/PeraturanMahasiswa',['peraturan'=>$peraturan]);
    }

    public function Login(){
        return view('Login/Login');
    }
}

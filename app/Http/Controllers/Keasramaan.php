<?php

namespace App\Http\Controllers;
use App\Models\peraturan;
use App\Models\perlengkapan;
use App\Models\re_entry;
use App\Models\ruangkamar;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Keasramaan extends Controller
{   
    public function __construct(){
        $this->middleware(function ($request,$next) {
            $role = Auth::user()->role;
            if($role != 1){
                abort(403);
            }
            return $next($request);
        });
    }

    public function IndexKeasramaan(){
        $DataRedel = DB::table('re_entry')->get();
        $DataBulan = [];
        foreach ($DataRedel as $bulan) {
            $DataBulan[] = $bulan->angkatan;
        }
        return view('Keasramaan/IndexKeasramaan',['DataRedel' => $DataRedel, 'DataBulan'=>$DataBulan]);
    }

    public function DetailRequestKeasramaan($re_entry_id){
        $DetailReentry = re_entry::where('id',$re_entry_id)->first();
        return view('Keasramaan/DetailRequest',compact('DetailReentry'));
    }

    public function UpdateDetail(Request $request,$re_entry_id){
        $UpdateDetail = re_entry::where('id',$re_entry_id)->first();
        $UpdateDetail->nama = $request->nama;
        $UpdateDetail->nim = $request->nim;
        $UpdateDetail->angkatan = $request -> angkatan;
        $UpdateDetail->prodi = $request -> prodi;
        $UpdateDetail->keperluan = $request -> keperluan;
        $UpdateDetail->asal =$request->asal;
        $UpdateDetail->tanggal = $request -> tanggal;
        $UpdateDetail->status =$request->status;
        $UpdateDetail->save();
        $ruangkamar = new ruangkamar;
        $ruangkamar->re_entry_id = $re_entry_id;
        $ruangkamar->user_id = $UpdateDetail->user_id;
        $ruangkamar->nama_asrama = $request->nama_asrama;
        $ruangkamar->nomor_kamar = $request->nomor_kamar;
        $ruangkamar->save();
        return redirect('/IndexKeasramaan');
    }

    public function DataKeasramaan(){
        return view('Keasramaan/DataKeasramaan');
    }

    public function EditDiriKeasraman(Request $request,$id){
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
        return redirect('/DataKeasramaan');
    }

    public function PerlengkapanKeasramaan(){
        $PerlengkapanAspa = DB::table('perlengkapan')->where('filter','=','aspa')->get();
        $PerlengkapanAspi = DB::table('perlengkapan')->where('filter','=','aspi')->get();
        return view('Keasramaan/PerlengkapanKeasramaan',['PerlengkapanAspa' => $PerlengkapanAspa],['PerlengkapanAspi' => $PerlengkapanAspi]);
    }

    public function TambahPerlengkapanKeasramaan(){
        return view('Keasramaan/TambahPerlengkapanKeasramaan');
    }
    
    public function TambahDataPerlengkapan(Request $request){
        $TambahPerlengkapan = new perlengkapan();
        $TambahPerlengkapan->nama_perlengkapan = $request->nama_perlengkapan;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('assets/Perlengkapan',$file);
            $TambahPerlengkapan->gambar = $file;
        }
        $TambahPerlengkapan->keterangan= $request->keterangan;
        $TambahPerlengkapan->jumlah= $request->jumlah;
        $TambahPerlengkapan->filter= $request->filter;
        $TambahPerlengkapan-> save();
        return redirect('/PerlengkapanKeasramaan');
    }

    public function EditPerlengkapan($perlengkapan_id){
        $EditPerlengkapan = perlengkapan::find($perlengkapan_id);
        return view('Keasramaan/EditPerlengkapanKeasramaan',compact('EditPerlengkapan'));
    }

    public function UpdatePerlengkapan(Request $request,$perlengkapan_id){
        $UpdatePerlengkapan = perlengkapan::find($perlengkapan_id);
        $UpdatePerlengkapan->nama_perlengkapan = $request->nama_perlengkapan;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('assets/Perlengkapan',$file);
            $UpdatePerlengkapan->gambar = $file;
        }
        $UpdatePerlengkapan->keterangan= $request->keterangan;
        $UpdatePerlengkapan->jumlah= $request->jumlah;
        $UpdatePerlengkapan->filter= $request->filter;
        $UpdatePerlengkapan-> save();
        return redirect('/PerlengkapanKeasramaan');
    }

    public function PerlengkapanDelete($perlengkapan_id){
        $DeletePerlengkapan = perlengkapan::find($perlengkapan_id);
        if($DeletePerlengkapan->delete()){
           return redirect()->back();
        }
    }

    public function PeraturanKeasramaan(){
        $Peraturan = DB::table('Peraturan')->orderBy('created_at','DESC')->get();
        return view('Keasramaan/PeraturanKeasramaan',['Peraturan' => $Peraturan]);
    }

    public function TambahPeraturanKeasramaan(){
        return view('Keasramaan/TambahPeraturanKeasramaan');
    }

    public function TambahDataPeraturan(Request $request){
        $TambahPeraturan = new Peraturan();
        if ($request->hasFile('file_peraturan')){
            $file= $request->file('file_peraturan')->getClientOriginalName();
            $request->file('file_peraturan')->move('assets/DokumenPeraturan',$file);
            $TambahPeraturan->file_peraturan = $file;
        }
        $TambahPeraturan->nama_peraturan= $request->nama_peraturan;
        $TambahPeraturan-> save();
        return redirect('/PeraturanKeasramaan');
    }

    public function EditPeraturan($peraturan_id){
        $EditPeraturan = peraturan::find($peraturan_id);
        return view('Keasramaan/EditPeraturanKeasramaan',compact('EditPeraturan'));
    }

    public function UpdatePeraturan(Request $request,$peraturan_id){
        $UpdatePeraturan = peraturan::find($peraturan_id);
        if ($request->hasFile('file_peraturan')){
            $file= $request->file('file_peraturan')->getClientOriginalName();
            $request->file('file_peraturan')->move('assets/DokumenPeraturan',$file);
            $UpdatePeraturan ->file_peraturan = $file;
        }
        $UpdatePeraturan ->nama_peraturan= $request->nama_peraturan;
        $UpdatePeraturan->save();
        return redirect('/PeraturanKeasramaan');
    }
    
    public function PeraturanDelete($peraturan_id){
        $DeletePeraturan = peraturan::find($peraturan_id);
        if($DeletePeraturan->delete()){
           return redirect()->back();
        }
    }

    public function RuangKamarKeasramaan(){
        $ruangkamar = ruangkamar::get();
        return view('Keasramaan/RuangKamarKeasramaan',['ruangkamar' => $ruangkamar]);
    }

    public function EditRuangKeasramaan($ruangkamar_id){
        $EditRuangKamar = ruangkamar::find($ruangkamar_id);
        return view('Keasramaan/EditRuangKamarKeasramaan',compact('EditRuangKamar'));
    }

    public function UpdateRuangKeasramaan(Request $request,$ruangkamar_id){
        $UpdateRuangKamar = ruangkamar::find($ruangkamar_id);
        $UpdateRuangKamar->nama_asrama= $request->nama_asrama;
        $UpdateRuangKamar->nomor_kamar=$request->nomor_kamar;
        $UpdateRuangKamar->save();
        return redirect('/RuangKamarKeasramaan');
    }

    public function RuangKamarDelete($ruangkamar_id){
        $DeleteRuangKamar = ruangkamar::find($ruangkamar_id);
        if($DeleteRuangKamar->delete()){
           return redirect()->back();
        }
    }

}

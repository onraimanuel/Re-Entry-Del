<?php

namespace App\Http\Controllers;
use App\Models\peraturan;
use App\Models\perlengkapan;
use Illuminate\Support\Facades\DB;
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
        $PerlengkapanAspa = DB::table('Perlengkapan')->where('filter','=','aspa')->get();
        $PerlengkapanAspi = DB::table('Perlengkapan')->where('filter','=','aspi')->get();
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
        return view('Keasramaan/RuangKamarKeasramaan');
    }

}

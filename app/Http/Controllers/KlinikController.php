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

class KlinikController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request,$next) {
            $role = Auth::user()->role;
            if($role != 4){
                abort(403);
            }
            return $next($request);
        });
    }

    public function IndexKlinik(){
        $layanan = DB::table('layanan')->get();
        return view('Klinik/IndexKlinik', ['layanan' => $layanan]);
    }

    public function DataKlinik(){
        return view('Klinik/DataKlinik');
    }

    public function EditDiriKlinik (Request $request,$id){
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
        return redirect('/DataKlinik');
    }

    public function DetailKlinik($layanan_id){
        $DetailKlinik = Layanan::find($layanan_id);
        // $pertanyaan  = DB::table('pertanyaan') -> get();
        return view('Klinik/DetailKlinik', compact('DetailKlinik'));
    }
}

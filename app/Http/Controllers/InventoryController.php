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

class InventoryController extends Controller
{   
    public function __construct(){
        $this->middleware(function ($request,$next) {
            $role = Auth::user()->role;
            if($role != 7){
                abort(403);
            }
            return $next($request);
        });
    }

    public function IndexInventory(){
        $ruangkamar = ruangkamar::get();
        return view('Inventory/IndexInventory',['ruangkamar' => $ruangkamar]);
    }

    public function DataInventory(){
        return view('Inventory/DataInventory');
    }

    public function EditDiriInventory (Request $request,$id){
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
        return redirect('/DataInventory');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   
    // public function __construct()
    // {
    //     $this->middleware('guest',['except'=>['logout']]);
    // }
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(){
        return view('Login/Login');
    }

    public function LoginAuthentikasi(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     $errors = $validator->errors();
        //     if ($errors->has('username')) {
        //         return response()->json([
        //             'alert' => 'error',
        //             'message' => $errors->first('username'),
        //         ]);
        //     } else {
        //         return response()->json([
        //             'alert' => 'error',
        //             'message' => $errors->first('password'),
        //         ]);
        //     }
        // }
        $check = User::where("username", $request->username)->first();
        $user = request()->except(['_token']);
        if ($check) {
            if (Auth::attempt($user)) {
                if (Auth::user()->role == 0) {
                    return redirect()->route('Mahasiswa');
                }elseif (Auth::user()->role == 1) {
                    return redirect()->route('Keasramaan');
                }elseif (Auth::user()->role == 2) {
                    return redirect()->route('HRD');
                }elseif (Auth::user()->role == 3) {
                    return redirect()->route('Keamanan');
                }elseif (Auth::user()->role == 4) {
                    return redirect()->route('Klinik');
                }elseif (Auth::user()->role == 5) {
                    return redirect()->route('Kantin');
                }elseif (Auth::user()->role == 6) {
                    return redirect()->route('Supir');
                }elseif (Auth::user()->role == 7) {
                    return redirect()->route('Inventory');
                };
            }
            else {
                return "<script> alert('Password Salah'); 
                history.back();
               </script> ";
            }
        }else{
           return "<script> alert('User tidak ditemukan'); 
            history.back();
           </script> ";
        }
    }

    public function logout(){
        $user = Auth::user();
        Auth::logout($user);
        return redirect()->route('login');
    }

    public function Register(){
        return view('Login/Register');
    }

    public function RegisterAuthentikasi(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|unique:users|max:255|email',
        //     'username' => 'required|unique:users|max:25|min:8|alpha_num',
        //     'password' => 'required|min:8',
        // ]);

        // if ($validator->fails()) {
        //     $errors = $validator->errors();
        //     if ($errors->has('name')) {
        //         return response()->json([
        //             'alert' => 'error',
        //             'message' => $errors->first('name'),
        //         ]);
        //     } elseif ($errors->has('email')) {
        //         return response()->json([
        //             'alert' => 'error',
        //             'message' => $errors->first('email'),
        //         ]);
        //     } elseif ($errors->has('username')) {
        //         return response()->json([
        //             'alert' => 'error',
        //             'message' => $errors->first('username'),
        //         ]);
        //     } elseif ($errors->has('password')) {
        //         return response()->json([
        //             'alert' => 'error',
        //             'message' => $errors->first('password'),
        //         ]);
        //     }
        // }
        $user = $request->all();
        $user['name'] = Str::title($request->name);
        $user['email'] = Str::title($request->username);
        $user['username'] = Str::title($request->username);
        $user['password'] = Hash::make($request->password);
        User::create($user);
        return redirect()->route('login');
    }

}

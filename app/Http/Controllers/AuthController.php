<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function actionRegister(Request $request){
        if($request->password == $request->confirm_password){
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'Admin' => $request->Admin,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('success', 'Berhasil Membuat Akun!');
            return redirect('/supplier_register');

        } else{
            session()->flash('error', 'Konfirmasi Password Anda Berbeda!');
            return redirect('/supplier_register');
        }
    }

    public function loginView(){
        if(Auth::check()){
            return redirect('/supplier');
        } else{
            return view('supplier.login');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::Attempt($data)) {
            session()->flash('success', 'Berhasil Masuk');
            return redirect('/supplier');
        } else {
            session()->flash('error', 'Email atau Password Salah');
            return redirect('/supplier');
        }

    }

    public function logout(){
        Auth::logout();
        session()->flash('success', 'Berhasil Logout');
        return redirect('/');
    }

    public function loginViewAdmin(){
        if(Auth::check()){
            return redirect('/admin');
        } else{
            return view('admin.login');
        }
    }

    //admin

    public function actionLoginAdmin(Request $request){
        $dataA = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::Attempt($dataA)) {
            session()->flash('success', 'Berhasil Masuk');
            return redirect('/admin');
        } else {
            session()->flash('error', 'Password Salah');
            return redirect('/');
        }

    }

    public function actionRegisterAdmin(Request $request){
        if($request->password == $request->confirm_password){
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'Admin' => $request->Admin,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('success', 'Berhasil Membuat Akun!');
            return redirect('/admin_register');

        } else{
            session()->flash('error', 'Konfirmasi Password Anda Berbeda!');
            return redirect('/admin_register');
        }
    }


}

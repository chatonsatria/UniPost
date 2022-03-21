<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('authentication.Register', [
            'title' => 'Register',
            'active' => 'register',
        ]);

    }
    public function store(Request $request)
    {
        //return request()->all();

        //memvalidasi data yang diinput
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // mengenkripsi password yang akan di input ke database
        //$validationData['password'] = bcrypt($validationData['password']);
        //menggunakan hash password
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        //flashing data dan redirect dari controller
        // $request->session()->flash('status', 'Registration successful! Please Login');
        // return redirect('/login');

        //atau
        return redirect('/login')->with('status', 'Registration successful! Please Login');
        //dd('registrasi berhasil');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    return view('home');
    }

    public function registerform()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ]);
        dd($request);
    }
}

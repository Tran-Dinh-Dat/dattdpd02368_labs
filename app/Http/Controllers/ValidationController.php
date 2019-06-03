<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function showform()
    {
        return view('login');
    }
    public function validateform(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|max:8',
            'password' => 'required'
        ]);
        if ($validateData->fails()) {
            return View('login')->withErrors($validateData);
        }
    }
    public function getCustomValidation() {
        return view('custumvalidation');
    }
    public function postCustomValidation(Request $request) {
        $this->validate($request, [
            'phone' => 'required|in_phone',
        ]);
        return 'Successfully';
    }
}

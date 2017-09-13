<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }

    public function postLogin(Request $request)
    {
    	$param = [
    		'email' => $request->email,
    		'password' => $request->password,
    	];

    	if (\Auth::attempt($param)) {
    		return redirect()->to('admin/product');
    	} else {
    		// Code
    	}

    }
}

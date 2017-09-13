<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseAdminController extends Controller
{
    public function __construct()
    {
        if (!\Auth::id()) {

            // dd('Dont login');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
        return view('pages.register');
    }

    public function welcome(Request $request)
    {
        $firstname = $request->input('firstname');

        return view('welcome', ['firstname' => $firstname]);
    }
}

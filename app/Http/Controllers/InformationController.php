<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function privacyPolicy()
    {
        return view('information.privacyPolicy');
    }

    public function terms()
    {
        return view('information.terms');
    }
}

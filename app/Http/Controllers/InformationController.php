<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function privacyPolicy()
    {
        return view('privacyPolicy');
    }

    public function terms()
    {
        return view('infomation.terms');
    }
}

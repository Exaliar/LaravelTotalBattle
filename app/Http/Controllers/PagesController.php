<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function index()
    // {
    //     return view('home');
    // }

    public function calculator()
    {
        return view('calculator');
    }

    public function calculator_old()
    {
        return view('calculatorOld');
    }

    public function calculator_new()
    {
        return view('calculatorNew');
    }

    public function forum()
    {
        return view('forum');
    }

    public function about()
    {
        return view('about');
    }

    public function profile()
    {
        return view('auth.profile');
    }
}

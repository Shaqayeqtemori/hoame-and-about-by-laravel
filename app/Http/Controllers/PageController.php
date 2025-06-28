<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home')->with('success', 'Successfully loaded home page.');
    }

    public function about()
    {
        return view('about')->with('error', 'Oops! Failed.');
    }

    public function contactform()
    {
        return view('contact');
    }

    public function submitContent(Request $request)
    {
    $name = $request->input('Name');
    $email = $request->input('Email');
    $message = $request->input('message');

    return back()->with('success', 'Successfully loaded home page.');
    }
}


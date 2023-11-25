<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function aboutMe()
    {
        return view('about_me');
    }

    public function project()
    {
        return view('project');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|min:10'
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}

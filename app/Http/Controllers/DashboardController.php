<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('rules');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('backend.dashboard.dashboard');
    }

    public function interest()
    {
        return view('backend.dashboard.dashboard.interest');
    }

    public function cryptoloans()
    {
        return view('backend.dashboard.dashboard.cryptoloans');
    }

    public function filesmanager()
    {
        return view('backend.dashboard.dashboard.files-manager');
    }

    public function chat()
    {
        return view('backend.dashboard.dashboard.chat.chat');
    }

    public function settings()
    {
        return view('backend.dashboard.settings.settings');
    }
}

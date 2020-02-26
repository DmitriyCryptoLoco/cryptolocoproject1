<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterPagesController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function signin()
    {
        return view('sessions.signin');
    }


    public function signup()
    {
        return view('sessions.signup');
    }

    public function reset()
    {
        return view('sessions.reset');
    }
}

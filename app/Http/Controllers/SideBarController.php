<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SideBarController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('roles');
    }

    public function large_compact_sidebar()
    {
        session(['layout' => 'compact']);
        return view('dashboard.dashboardv1');
    }

    public function large_sidebar()
    {
        session(['layout' => 'normal']);
        return view('dashboard.dashboardv1');
    }

    public function horizontal_bar()
    {
        session(['layout' => 'horizontal']);
        return view('dashboard.dashboardv1');
    }

    public function vertical()
    {
        session(['layout' => 'vertical']);
        return view('dashboard.dashboardv1');
    }

}

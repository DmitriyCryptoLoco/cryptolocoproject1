<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Blockchain;


class BlockChainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //   $this->middleware('auth');
        //  $this->middleware('roles');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
    }

    public function makepayment($data)
    {

        $data = $_POST["amountofpayment"];
        var_dump($data);

        $res = json_encode(["payment charge" => ".$data."]);

        return $res;
    }
}

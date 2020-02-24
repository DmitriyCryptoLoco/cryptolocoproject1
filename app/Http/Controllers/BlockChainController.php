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

    public function index()
    {

    }

    public function makepayment($data)
    {

        //        $api_key = "";
        //        $Blockchain = new \Blockchain\Blockchain($api_key);
        //        $Blockchain->setServiceUrl('http://localhost:3000');
        //        $Blockchain->Wallet->credentials('1ffd0ca4-b10c-44ea-b3f9-e4db430cc023', 'b9Kc&L@7EHfQg5/');
        //
        //        $active_id = $Blockchain->Wallet->getIdentifier();
        //        $balance = $Blockchain->Wallet->getBalance();
        //
        //        $btc_amount = $Blockchain->Rates->toBTC(10156.17, 'USD');
        //
        //        var_dump($btc_amount);
        //        var_dump($active_id);
        //        var_dump($balance);

        $data = $_POST["amountofpayment"];
        var_dump($data);

        $res = json_encode(["payment charge" => ".$data."]);

        return $res;
    }
}

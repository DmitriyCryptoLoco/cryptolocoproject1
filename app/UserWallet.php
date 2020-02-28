<?php

namespace App;

class UserWallet
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Id', 'ETHBalance', 'BTCBalance', 'LTCBalance', 'LocalBalance', 'Walletname'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'Id', 'ETHBalance', 'BTCBalance', 'LTCBalance', 'LocalBalance', 'Walletname'
    ];

    protected $paymentstatus = [
        'active', 'pending', 'complite'
    ];

    public function Withdraw($role)
    {

    }

    public function MakePayment($role)
    {

    }

    public function CheckWallet($role)
    {

    }

}

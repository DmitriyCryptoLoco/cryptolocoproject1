<?php

namespace App;

class UserWallet  {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'ETHBalance', 'BTCBalance', 'LTCBalance', 'LocalBalance', 'Walletname'
    ];

    /**
     * @var array
     */
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'email', 'ETHBalance', 'BTCBalance', 'LTCBalance', 'LocalBalance', 'Walletname'
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

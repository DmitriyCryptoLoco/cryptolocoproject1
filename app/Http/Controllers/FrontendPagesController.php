<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPagesController extends Controller
{
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
        return view('frontend.index');
    }

    public function contacts()
    {
        return view('frontend.pages.contact');
    }

    public function affiliate()
    {
        return view('frontend.pages.affiliate');
    }

    public function privacy()
    {
        return view('frontend.pages.privacy');
    }

    public function termsofservice()
    {
        return view('frontend.pages.termsofservice');
    }

    public function licenses()
    {
        return view('frontend.pages.licenses');
    }

    public function feedback()
    {
        return view('frontend.pages.feedback');
    }

    public function team()
    {
        return view('frontend.pages.team');
    }

    public function advisors()
    {
        return view('frontend.pages.advisors');
    }

    public function investors()
    {
        return view('frontend.pages.investors');
    }

    public function careers()
    {
        return view('frontend.pages.careers');
    }

    public function institutions()
    {
        return view('frontend.pages.institutions');
    }

    public function fees()
    {
        return view('frontend.pages.fees');
    }

    public function news()
    {
        return view('frontend.pages.news');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function resource_center()
    {
        return view('frontend.pages.resource_center');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function refer_a_friend()
    {
        return view('frontend.pages.refer_a_friend');
    }

    public function prohibited_uses()
    {
        return view('frontend.pages.prohibited_uses');
    }

    public function products()
    {
        return view('frontend.pages.products');
    }

    public function interest_account()
    {
        return view('frontend.pages.interest_account');
    }

    public function trading()
    {
        return view('frontend.pages.trading');
    }

    public function our_rates()
    {
        return view('frontend.pages.our_rates');
    }

    public function cryptointerestaccount()
    {
        return view('frontend.pages.crypto-interest-account');
    }

    public function crypto_loans()
    {
        return view('frontend.pages.pages.crypto_loans');
    }

    public function earn_crypto()
    {
        return view('frontend.pages.earn_crypto');
    }

    public function how_to_get_a_bitcoin_loan()
    {
        return view('frontend.pages.how_to_get_a_bitcoin_loan');
    }

    public function earn_bitcoin_interest()
    {
        return view('frontend.pages.earn_bitcoin_interest');
    }

    public function home_loans()
    {
        return view('frontend.pages.home_loans');
    }

    public function refinance_debt()
    {
        return view('frontend.pages.refinance_debt');
    }

    public function fund_crypto_mining()
    {
        return view('frontend.pages.fund_crypto_mining');
    }

    public function auto_loan()
    {
        return view('frontend.pages.auto_loan');
    }
}

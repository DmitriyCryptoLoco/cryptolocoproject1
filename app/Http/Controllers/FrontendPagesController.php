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
        return view('frontend.contact');
    }

    public function affiliate()
    {
        return view('frontend.affiliate');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function termsofservice()
    {
        return view('frontend.termsofservice');
    }

    public function licenses()
    {
        return view('frontend.licenses');
    }

    public function feedback()
    {
        return view('frontend.feedback');
    }

    public function team()
    {
        return view('frontend.team');
    }

    public function advisors()
    {
        return view('frontend.advisors');
    }

    public function investors()
    {
        return view('frontend.investors');
    }

    public function careers()
    {
        return view('frontend.careers');
    }

    public function institutions()
    {
        return view('frontend.institutions');
    }

    public function fees()
    {
        return view('frontend.fees');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function resource_center()
    {
        return view('frontend.resource_center');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function refer_a_friend()
    {
        return view('frontend.refer_a_friend');
    }

    public function prohibited_uses()
    {
        return view('frontend.prohibited_uses');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function interest_account()
    {
        return view('frontend.interest_account');
    }

    public function trading()
    {
        return view('frontend.trading');
    }

    public function our_rates()
    {
        return view('frontend.our_rates');
    }

    public function crypto_interest_account()
    {
        return view('frontend.crypto_interest_account');
    }

    public function crypto_loans()
    {
        return view('frontend.pages.crypto_loans');
    }

    public function earn_crypto()
    {
        return view('frontend.earn_crypto');
    }

    public function how_to_get_a_bitcoin_loan()
    {
        return view('frontend.how_to_get_a_bitcoin_loan');
    }

    public function earn_bitcoin_interest()
    {
        return view('frontend.earn_bitcoin_interest');
    }

    public function home_loans()
    {
        return view('frontend.home_loans');
    }

    public function refinance_debt()
    {
        return view('frontend.refinance_debt');
    }

    public function fund_crypto_mining()
    {
        return view('frontend.fund_crypto_mining');
    }

    public function auto_loan()
    {
        return view('frontend.auto_loan');
    }
}

<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        return view('user.home');
    }

    public function suka(Request $request)
    {
        return view('user.suka');
    }

    public function keranjang(Request $request)
    {
        return view('user.keranjang');
    }

    public function checkout(Request $request)
    {
        return view('user.checkout');
    }

    public function profil(Request $request)
    {
        return view('user.profil');
    }

    public function setting(Request $request)
    {
        return view('user.setting');
    }

}

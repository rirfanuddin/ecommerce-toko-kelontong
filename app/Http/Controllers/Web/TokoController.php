<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home(){
        return view('toko.home');
    }
}

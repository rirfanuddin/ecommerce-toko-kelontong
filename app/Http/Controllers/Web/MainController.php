<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        return view('user.first');
    }

    public function detailProduk(){
        return view('user.detail_produk');
    }

}

<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use App\RoleUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Log;
use Illuminate\Support\Facades\Hash;

class AdminCoreController extends Controller
{
    
    public function index()
    {
        return response()->json(['auth'=>Auth::user(), 'users'=>User::all()]);
    }  

    public function register(Request $request){
        $user  = new User();
        $roleuser = new RoleUser();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');        
        $user->save();

        $roleuser->user_id = $user->id;
        $roleuser->role_id = "2";
        $roleuser->save();

        return response()->json("created");
    }

}


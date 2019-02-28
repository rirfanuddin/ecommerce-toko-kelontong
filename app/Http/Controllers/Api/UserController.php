<?php

namespace App\Http\Controllers\Api;

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

class UserController extends Controller
{ 

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
        $roleuser->role_id = "4";
        $roleuser->save();

        return response()->json("created");
    }

}


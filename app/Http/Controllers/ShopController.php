<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use App\RoleUser;
use App\Shop;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{    
    public function register(Request $request){
        $user  = new User();
        $roleuser = new RoleUser();
        $shop = new Shop();
        $auth = Auth::user();
        // dd($auth);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');        
        $user->save();

        $roleuser->user_id = $user->id;
        $roleuser->role_id = "3";
        $roleuser->save();

        $shop->user_id = $user->id;
        $shop->admin_id = $auth->id;
        $shop->shop_name = $request->input('shop_name');
        $shop->save();

        return response()->json("created");
    }

    public function index(){
        $data = DB::select('select * from role_user, users where role_id=2 and role_user.user_id=users.id');
        dd($data);
        return response()->json(['auth'=>Auth::user(), 'users'=>User::all()]);
    }

    public function show($id){
        $data = Category::where('id', $id)->get();

        if(count($data)>0){
            $response['message'] = 'success';
            $response['results'] = $data;
            return response($response);
        }
        else{
            $response['message'] = 'failed';
            return response($response);
        }

    }
}


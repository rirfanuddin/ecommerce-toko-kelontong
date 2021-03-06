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
use Illuminate\Support\Facades\DB;

class AdminCoreController extends Controller
{

    public function admin_register(Request $request){
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

    public function admin_index(){
        $data = DB::select('select id, 
                                    name, 
                                    email, 
                                    username, 
                                    phone, 
                                    phone_verified_at                                    
                            from role_user, users 
                            where role_id=2 and 
                                    role_user.user_id=users.id');
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

    public function admin_show($id){
        $data = DB::select('select id, 
                                    name, 
                                    email, 
                                    email_verified_at, 
                                    created_at, 
                                    username, 
                                    phone, 
                                    phone_verified_at, 
                                    bod, 
                                    transportation_id 
                            from role_user, users 
                            where role_id=2 and 
                                    role_user.user_id=users.id and 
                                    id = ?', [$id]);
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

    public function admin_edit(Request $request, $id){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $username = $request->input('username');
        $phone = $request->input('phone');
        
        $data = User::where('id', $id)->first();
        $data->name = $name;
        $data->email = $email;
        $data->password = Hash::make($password);
        $data->username = $username;
        $data->phone = $phone;

        if($data->save()){
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


<?php

namespace App\Http\Controllers\Api;

use App\Permission;
use App\Role;
use App\User;
use App\RoleUser;
use App\Product;
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

class ProductController extends Controller
{    
    public function store(Request $request){
        $data = new Product();

        if($request->input('shop_id')!=null){
            $id = $request->input('shop_id');
        }else{
            $auth = Auth::user()->id;
            $shop = Shop::where('user_id', $auth)->first();
            $id = $shop->id;
        }

        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->quantity = $request->input('quantity');
        $data->thumbnail = $request->input('thumbnail');
        $data->unit_price = $request->input('unit_price');
        $data->picture = $request->input('picture');
        $data->category_id = $request->input('category_id');
        $data->shop_id = $id;
        $data->discount = $request->input('discount');
        $data->weight = $request->input('weight');

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

    public function show($id){
        $data = Product::where('id', $id)->get();

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

    public function edit(Request $request, $id){    

        $data = Product::where('id', $id)->first();
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->quantity = $request->input('quantity');
        $data->thumbnail = $request->input('thumbnail');
        $data->unit_price = $request->input('unit_price');
        $data->picture = $request->input('picture');
        $data->category_id = $request->input('category_id');        
        $data->discount = $request->input('discount');
        $data->weight = $request->input('weight');

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

    public function delete($id){
        $data = Product::where('id', $id)->first();
        if($data->delete()){
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


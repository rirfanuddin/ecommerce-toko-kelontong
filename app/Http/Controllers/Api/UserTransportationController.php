<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\UserTransportation;

class UserTransportationController extends Controller
{
    public function index(Request $request){
        $data = UserTransportation::all();

        if(count($data)>0){
            $response['message'] = 'success';
            $response['results'] = $data;
            return response($response);
        }
        else{
            $response[' message'] = 'failed';
            return response($response);
        }
        
    }

    public function show($id){
        $data = UserTransportation::where('id', $id)->get();

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

    public function store(Request $request){
        $data = new UserTransportation();
        $data->user_transportation_name = $request->input('user_transportation_name');        

        if($data->save()){
            $response['message'] = 'success';
            $response['results'] = $data;
            return response($response);
        }
    }

    public function edit(Request $request, $id){
        $user_transportation_name = $request->input('user_transportation_name');        
        
        $data = UserTransportation::where('id', $id)->first();
        $data->user_transportation_name = $user_transportation_name;        

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
        $data = UserTransportation::where('id', $id)->first();
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

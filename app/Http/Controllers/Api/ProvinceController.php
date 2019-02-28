<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Province;

class ProvinceController extends Controller
{
    public function index(){
        $data = Province::all();

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

    public function show($id){
        $data = Province::where('id', $id)->get();

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
        $data = new Province();
        $data->province_name = $request->input('province_name');
        $data->province_description = $request->input('province_description');

        if($data->save()){
            $response['message'] = 'success';
            $response['results'] = $data;
            return response($response);
        }
    }

    public function edit(Request $request, $id){
        $province_name = $request->input('province_name');
        $province_description = $request->input('province_description');
        
        $data = Province::where('id', $id)->first();
        $data->province_name = $province_name;
        $data->province_description = $province_description;

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
        $data = Province::where('id', $id)->first();
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

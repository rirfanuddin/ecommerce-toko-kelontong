<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index(Request $request){
        if($request->province != null){
            $data = City::where('province_id', $request->province)->get();
        }
        else{
            $data = City::all();     
        }

        if(count($data)>0){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
        else{
            $response['message'] = 'failed';
            return response($response);
        }

    }

    public function show($id){
        $data = City::where('id', $id)->get();

        if(count($data)>0){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
        else{
            $response['message'] = 'failed';
            return response($response);
        }

    }

    public function showByProvince($id){
        $data = City::where('province_id', $id)->get();
        
        if(count($data)>0){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
        else{
            $response['message'] = 'failed';
            return response($response);
        }
    }

    public function store(Request $request){
        $data = new City();
        $data->province_id = $request->input('province_id');
        $data->city_name = $request->input('city_name');
        $data->city_description = $request->input('city_description');

        if($data->save()){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
    }

    public function edit(Request $request, $id){
        $city_name = $request->input('city_name');
        $city_description = $request->input('city_description');
        
        $data = City::where('id', $id)->first();
        $data->city_name = $city_name;
        $data->city_description = $city_description;

        if($data->save()){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
        else{
            $response['message'] = 'failed';
            return response($response);
        }
    }

    public function delete($id){
        $data = City::where('id', $id)->first();
        if($data->delete()){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
        else{
            $response['message'] = 'failed';
            return response($response);
        }
    }
}

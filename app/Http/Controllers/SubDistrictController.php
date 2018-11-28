<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubDistrict;

class SubDistrictController extends Controller
{
    public function index(Request $request){
        if($request->city != null){
            $data = SubDistrict::where('city_id', $request->city)->get();
        }
        else{
            $data = SubDistrict::all();     
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
        $data = SubDistrict::where('id', $id)->get();

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
        $data = new SubDistrict();
        $data->city_id = $request->input('city_id');
        $data->sub_district_name = $request->input('sub_district_name');
        $data->sub_district_description = $request->input('sub_district_description');

        if($data->save()){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
    }

    public function edit(Request $request, $id){
        $sub_district_name = $request->input('sub_district_name');
        $sub_district_description = $request->input('sub_district_description');
        
        $data = SubDistrict::where('id', $id)->first();
        $data->sub_district_name = $sub_district_name;
        $data->sub_district_description = $sub_district_description;

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
        $data = SubDistrict::where('id', $id)->first();
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

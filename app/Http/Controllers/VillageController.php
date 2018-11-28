<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Village;

class VillageController extends Controller
{
    public function index(Request $request){
        if($request->subdistrict != null){
            $data = Village::where('sub_district_id', $request->subdistrict)->get();
        }
        else{
            $data = Village::all();     
        }

        if(count($data)>0){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
        else{
            $response[' message'] = 'failed';
            return response($response);
        }
        
    }

    public function show($id){
        $data = Village::where('id', $id)->get();

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
        $data = new Village();
        $data->sub_district_id = $request->input('sub_district_id');
        $data->village_name = $request->input('village_name');
        $data->village_description = $request->input('village_description');

        if($data->save()){
            $response['message'] = 'success';
            $response['values'] = $data;
            return response($response);
        }
    }

    public function edit(Request $request, $id){
        $village_name = $request->input('village_name');
        $village_description = $request->input('village_description');
        
        $data = Village::where('id', $id)->first();
        $data->village_name = $village_name;
        $data->village_description = $village_description;

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
        $data = Village::where('id', $id)->first();
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

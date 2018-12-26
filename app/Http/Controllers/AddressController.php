<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Province;
use App\City;
use App\SubDistrict;
use App\Village;
use App\UserAddress;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function show($id){
        $data = Address::where('id', $id)->get();        
        foreach($data as $x){                
            $id_province = $x->province_id;
            $id_city = $x->city_id;
            $id_sub_district = $x->sub_district_id;            
            $id_village = $x->village_id;
        }
        // dd($id_village);
        $province = Province::find($id_province);
        $city = City::find($id_city);                    
        $sub_district = SubDistrict::find($id_sub_district);
        $village = Village::find($id_village); 

        if(count($data)>0){
            $response['message'] = 'success';
            $response['province'] = $province;
            $response['city'] = $city;
            $response['sub_district'] = $sub_district;
            $response['village'] = $village;
            return response($response);
        }
        else{
            $response['message'] = 'failed';
            return response($response);
        }

    }

    public function store(Request $request){
        $address = new Address();
        $address->province_id = $request->input('province_id');
        $address->city_id = $request->input('city_id');
        $address->sub_district_id = $request->input('sub_district_id');
        $address->village_id = $request->input('village_id');
        $address->address_detail = $request->input('address_detail');
        $address->address_postalcode = $request->input('address_postalcode');
        $address->save();

        $user_address = new UserAddress();
        $user_address->user_id = Auth::user()->id;
        $user_address->address_id = $address->id;


        if($user_address->save()){
            $response['message'] = 'success';
            $response['results'] = $address;
            return response($response);
        }
    }

    public function edit(Request $request, $id){          
        $province_id = $request->input('province_id');
        $city_id = $request->input('city_id');
        $sub_district_id = $request->input('sub_district_id');
        $village_id = $request->input('village_id');
        $address_detail = $request->input('address_detail');
        $address_postalcode = $request->input('address_postalcode');

        $data = Address::where('id', $id)->first();        

        $data->province_id = $province_id;
        $data->city_id = $city_id;
        $data->sub_district_id = $sub_district_id;
        $data->village_id = $village_id;
        $data->address_detail = $address_detail;
        $data->address_postalcode = $address_postalcode;

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

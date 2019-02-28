<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function index(){
        $data = Payment::all();

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
        $data = Payment::where('id', $id)->get();

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
        $data = new Payment();
        $data->payment_type = $request->input('payment_type');
        $data->description = $request->input('description');

        if($data->save()){
            $response['message'] = 'success';
            $response['results'] = $data;
            return response($response);
        }
    }

    public function edit(Request $request, $id){
        $payment_type = $request->input('payment_type');
        $description = $request->input('description');    

        $data = Payment::where('id', $id)->first();
        $data->payment_type = $payment_type;
        $data->description = $description;

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
        $data = Payment::where('id', $id)->first();

        $data->allowed = '0';

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

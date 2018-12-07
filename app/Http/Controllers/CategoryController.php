<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::all();

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

    public function store(Request $request){
        $data = new Category();
        $data->category_name = $request->input('category_name');
        $data->description = $request->input('category_description');

        if($data->save()){
            $response['message'] = 'success';
            $response['results'] = $data;
            return response($response);
        }
    }

    public function edit(Request $request, $id){
        $category_name = $request->input('category_name');
        $description = $request->input('category_description');    

        $data = Category::where('id', $id)->first();
        $data->category_name = $category_name;
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
        $data = Category::where('id', $id)->first();
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\product;


class ProductController extends Controller
{
    public function index(){
        return view('/addrecord');
    }
    public function addrecord(Request $request){
        // echo "<pre>";
        // print_r($request ->all());
        $product = new product();
        $product->product_name = $request['product_name'];
        $product->product_type = $request['product_type'];
        $product->product_company = $request['product_company'];
        $product->no_of_product = $request['no_of_product'];
        $product->save();

        return redirect('/showrecord');
    }
    public function showall(){

        $product = product::all();
        $data = compact('product');

        return view('showrecord')->with($data);


    }
}

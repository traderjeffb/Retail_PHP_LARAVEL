<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addItem($id)
    {
        $item= Product::where('id',"=", "$id")->first();
        $products= Product::where('catagory',"=", "$item->catagory")->get();
        //dd($products);
        // echo"<pre>";
        // print_r($products);
        // exit();
        return view('sales.cart',compact ('products'));
}

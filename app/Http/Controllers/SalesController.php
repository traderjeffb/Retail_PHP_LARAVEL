<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    
    public function addItem($id)
    {
        dd('made it to salescontroller');
        $cart=[];
        $cart = $cart + $id;
        dd($cart);
        //$products= Product::where('id',"=", "$id")->all();
        

        //return view(Sale.cart);
    }



}

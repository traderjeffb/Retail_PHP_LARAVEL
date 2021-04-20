<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    
    public function AddItem(id)
    {
        $products= Product::where('id',"=", "$id")->first();
        $cart = $cart + $products

        return view(Sale.cart);
    }



}

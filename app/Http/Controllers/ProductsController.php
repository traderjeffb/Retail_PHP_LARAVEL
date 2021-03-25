<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\product;
use Product as GlobalProduct;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $products = DB::table('Products')->get();
        $products = Product::all();
        // echo"<pre>";
        // print_r($products);
        // exit();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view(view:'products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'catagory'=>'required | string',
        //     'product_number'=>'required|numeric| digits:6',
        //     'name'=>'required ',
        //     'price'=>'required|numeric',
        //     'cost'=>'required|numeric',
        //     'description'=> 'required|string|max:100',
        //     'inventory'=> 'required | numeric'
        //     ]);


        Product::create($request->all());
        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        dd($id);
        $products= Product::where('id',"=", "$id")->first();
        dd($products);
        return view('products.details', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view(view:'products.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //DB::table('products')->where('id', '=', $id)->delete();
        $products= Product::where('id',"=", "$id")->first();

    }

    public function welcome()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }
    
    public function item($catagory)
    {
        dd('hello');
        $products= Product::where('catagory','=','$catagory')->all();
        return view('products.item',compact ('products'));
    }
}

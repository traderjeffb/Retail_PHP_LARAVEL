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
        $products = Product::find(2754);
        $accessor = $products->name;
        dd($accessor);
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
          //  $request->validate([
          // 'image_path'=> 'required | mimes: jpg, png, jpeg ',
            // 'catagory'=>'required',
            // 'product_number'=>'required',
            // 'name'=>'required ',
            // 'price'=>'required',
            // 'cost'=>'required',
            // 'description'=> 'required',
            // 'inventory'=> 'required'
         //   ]);
//dd($request);
//dd($request->name, $request->image_path);
//dd($request->all());
        $imageName = time().'.'.$request->image_path->extension();  
        $request->image_path->move(public_path('images'), $imageName);
            dd("anything");

  //          $newImageName = $request->name . ' website';
            //dd($newImageName); //<-works fine
            //. '-' . $request->created_at . '.' . $request->image_path->extention();
            //dd($newImageName);
          //  dd(public_path());
            // $request->image->move(public_path('images'),$newImageName);
            // $request->image->store(public_path('images'),$newImageName);
            return $newImageName;

            //dd($request);

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

    public function item(Request $request)
    {
        //$products= Product::where('catagory','=','$catagory')->all();
        //$products = Product::all();
        dd($request);

        $products= Product::where('catagory', $request->catagory)->get();
        // echo"<pre>";
        // print_r($products);
        // exit();
        return view('products.item',compact ('products'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\product;
use Error;
use Product as GlobalProduct;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::find(2754);
        // $accessor = $products->name;
        // dd($accessor);
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
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   //     dd($request['image_path']);

            $request->validate([
                'image_path'=> 'required | mimes:jpg,png,jpeg',
                'catagory'=>'required',
                'product_number'=>'required',
                'name'=>'required ',
                'price'=>'required',
                'cost'=>'required',
                'description'=> 'required',
                'inventory'=> 'required'
            ]);
            if($files=$request->file('image_path')){
                $path = public_path('images');
    
                $name= $files->getClientOriginalName();
             //   dd($name);
                $files->move($path, $name);
            }
           
        //     $image_path = Storage::disk('public')->putFile('images', $request->file('image_path')
        //Product::create($request->all());
        $product = new Product();
        $product->image_path = $name;
        $product->catagory = $request->get('catagory');
        $product->product_number = $request->get('product_number');
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->cost = $request->get('cost');
        $product->description = $request->get('description');
        $product->inventory = $request->get('inventory');
        $product->save();




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
        
        $products= Product::where('id',"=", "$id")->first();
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
        $products= Product::where('id',"=", "$id")->first();
        //dd($products);
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $products= Product::where('id',"=", $id)->first();

        $products->image_path= $request['image_path'];
        $products->catagory = $request['catagory'];
        $products->product_number = $request['product_number'];
        $products->name = $request['name'];
        $products->price = $request['price'];
        $products->cost = $request['cost'];
        $products->description = $request['description'];

        $products->save();

       // return redirect()->back()->withSuccess('IT WORKS!');
        return redirect()->route('index')->with('success','Success Message here!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $products=Product::where('id',"=", "$id")->first();
        return view('products.delete', compact('products'));
        //return redirect('index')->with('status','The record has been deleted');
    }

    public function welcome()
    {
        return view('welcome');
    }
    public function jeff($functionwillstoreValueInthisParameter)
    {
        //return view('welcome');
        dd($functionwillstoreValueInthisParameter);
    }

    public function item()
    {   
        $products= Product::where('catagory','=','hats')->get();
        //$products = Product::all();
        
        //dd($request);

     //   $products= Product::where('catagory', $request->catagory)->get();
        // echo"<pre>";
        // print_r($products);
        // exit();
        return view('products.item',compact ('products'));
    }
}

@extends('layouts.adminNav')
@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Products</title>
</head>
<body>
    <div class="pageTitle">Index of Products</div>
    @if(session('success'))
    <h1>{{session('success')}}</h1>
@endif

  <table class="table">
    <thead>
      <tr>
        <th>Catagory</th>
        <th>Product Number</th>
        <th>Name</th>
        <th>Retail Price</th>
        <th>Cost</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td class="tableData">{{$product['catagory']}}</td>
        <td class="tableData">{{$product['product_number']}}</td>
        <td class="tableData">{{$product['name']}}</td>
        <td class="tableData">{{$product['price']}}</td>
        <td class="tableData">{{$product['cost']}}</td>
        <td class="tableData">{{$product['description']}}</td>
        <td class="tableData" >
          <a href="{{route('products.edit',   ['id'=>$product['id']]) }}">Edit</a>
          <a href="{{route('products.details',['id'=>$product['id']]) }}">Details</a>
          <a href="{{route('products.delete', ['id'=>$product['id']]) }}">Delete</a>
        </td>
      </tr>


      @endforeach
    </tbody>
  </table>
</body>
</html>
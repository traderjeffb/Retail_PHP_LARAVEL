
{{-- @extends('layouts.app') --}}
@extends('layouts.adminNav')
@section('content')
    <div class="pageTitle">Index of Products</div>
    @if(session('success'))
    <h1>{{session('success')}}</h1>
    @endif
  <table class="table">
    <thead>
      <tr>
        <th>Photo</th>
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
        <td  class="tableData"><img alt="GeeksforGeeks logo" width="50" height="50"
          src="{{ asset('images') }}\{{$product['image_path']}}"></td>
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
@endsection

@extends('layouts.app')
@extends('layouts.adminNav')

@section('content')   
  <div class="container mt-4">
    @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
    <div class="card">
      <div class="card-header text-center font-weight-bold">
        Details of: {{ $products['name']}} 
      </div>
      <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="" action="{{url('index')}}">
          @csrf
          <div class="form-group">
            <td  class="tableData"><img alt="GeeksforGeeks logo" width="150" height="200"
              src="{{ asset('images') }}\{{$products['image_path']}}"></td>
          </div>
          <div class="form-group">
            <label for="catagory">Catagory</label>
            <input type="text" id="catagory" name="catagory" class="form-control" readonly value = "{{ $products['catagory'] }}">
          </div>
          <div class="form-group">
            <label for="product_number">Product Number</label>
            <input type="text" id="product_number" name="product_number" class="form-control" readonly value = "{{ $products['product_number'] }}">
          </div>        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" readonly 
            value = "{{ $products['name'] }}">
          </div>        <div class="form-group">
            <label for="price">Retail Price</label>
            <input type="text" id="price" name="price" class="form-control" readonly 
            value = "{{ $products['price'] }}">
          </div>        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="text" id="cost" name="cost" class="form-control" readonly 
            value = "{{ $products['cost'] }}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea type="longtext" name="description" id = "description" class="form-control" readonly 
            >{{ $products['description'] }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Back to Index</button>
        </form>
      </div>
    </div>
  </div>    
@endsection
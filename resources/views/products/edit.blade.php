<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Edit a product
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('/update/'.$products['id']) }}">
        @csrf
        <div class="form-group">
          <label for="image_path">Select image:</label>
          <input type="file" id="image_path" name="image_path" class="form-control" accept="image_path/*" value = "{{ $products['image_path'] }}" >
        </div>
        <div class="form-group">
          <label for="catagory">Catagory</label>
          <input type="text" id="catagory" name="catagory" class="form-control" required="" value = "{{ $products['catagory'] }}">
        </div>
        <div class="form-group">
          <label for="product_number">Product Number</label>
          <input type="text" id="product_number" name="product_number" class="form-control" required="" value = "{{ $products['product_number'] }}">
        </div>        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" required 
          value = "{{ $products['name'] }}">
        </div>        <div class="form-group">
          <label for="price">Retail Price</label>
          <input type="text" id="price" name="price" class="form-control" required 
          value = "{{ $products['price'] }}">
        </div>        <div class="form-group">
          <label for="cost">Cost</label>
          <input type="text" id="cost" name="cost" class="form-control" required 
          value = "{{ $products['cost'] }}">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea type="text" name="description" id = "description" class="form-control" required 
          >{{ $products['description'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>    
</body>
</html>
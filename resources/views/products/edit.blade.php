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
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store')}}">
        @csrf
        <div class="form-group">
          <label for="imgage">Select image:</label>
          <input type="file" id="imgage" name="imgage" accept="image/*">
        </div>
        <div class="form-group">
          <label for="catagory">Catagory</label>
          <input type="text" id="catagory" name="catagory" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="product_number">Product Number</label>
          <input type="text" id="product_number" name="product_number" class="form-control" required="">
        </div>        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>        <div class="form-group">
          <label for="price">Retail Price</label>
          <input type="text" id="price" name="price" class="form-control" required="">
        </div>        <div class="form-group">
          <label for="cost">Cost</label>
          <input type="text" id="cost" name="cost" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>    
</body>
</html>
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
      Add a new product
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data" action="{{url('store')}}">
       @csrf
        <div class="form-group">
          <label for="image_path">Select image:</label>
          <input type="file" id="image_path" name="image_path" >
        </div>
        <div class="form-group">
          <label for="catagory">Catagory</label>
          <input type="text" id="catagory" name="catagory" class="form-control" required value="{{ old('catagory') }}" required autocomplete="catagory"  >
        </div>
        <div class="form-group">
          <label for="product_number">Product Number</label>
          <input type="number" id="product_number" name="product_number" class="form-control" required="">
        </div>       
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"  autocomplete="name" >
          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>        <div class="form-group">
          <label for="price">Retail Price</label>
          <input type="number" step="0.01"
            id="price" name="price" class="form-control" required="">
        </div>        <div class="form-group">
          <label for="cost">Cost</label>
          <input type="number" step="0.01"
            id="cost" name="cost" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
      </div>        <div class="form-group">
        <label for="cost">Inventory</label>
        <input type="number" step="0.01"
          id="inventory" name="inventory" class="form-control" required="">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      {{--  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
      @endif  --}}

      {{-- @if (errors->any())
      <div>
        @foreach(errors->all()as $error)
        <li style="color:red;">{{ $error }}</li>
      </div>
      @endforeach 
      @endif --}}
    </div>
  </div>
</div>    
</body>
</html>
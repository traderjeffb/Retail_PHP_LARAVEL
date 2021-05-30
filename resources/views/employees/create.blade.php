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
      Add a new employee
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('employees/store')}}">
       @csrf
        {{-- <div class="form-group">
          <label for="imgage">Select image:</label>
          <input type="file" id="imgage" name="imgage" >
        </div> --}}
        <div class="form-group">
          <label for="first">First Name</label>
          <input type="text" id="first" name="first" class="form-control" required="" >
        </div>
        <div class="form-group">
          <label for="product_number">Last Name</label>
          <input type="text" id="last" name="last" class="form-control" required="">
        </div>        <div class="form-group">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" class="form-control" required="">
        </div>        <div class="form-group">
        <div class="form-group">
          <label for="street_address">Street Address</label>
          <input type="string" id="street_address" name="street_address" class="form-control" required="">
        </div>       
        <div class="form-group">
          <label for="city">City</label>
          <input type="string" id="city" name="city" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="state">State</label>
          <input type="string" id="state" name="state" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="department">Department</label>
          <input type="string" id="department" name="department" class="form-control" required="">
       </div>
       <div class="form-group">
        <label for="salary">Salary</label>
        <input type="number" id="salary" name="salary" class="form-control" required="">
     </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
      @endif

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
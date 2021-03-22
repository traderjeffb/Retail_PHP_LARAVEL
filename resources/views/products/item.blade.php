@extends('layouts.app')
@extends('layouts.adminNav')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Item Page</title>
</head>
<body>
<h1>Here are our currently available {{ [$product('catagory')] }}</h1>
@foreach($products as $product)
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ [$product('name')]}}</h5>
      <p class="card-text">{{ [$product('description')] }}</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
@endforeach

</body>
</html>



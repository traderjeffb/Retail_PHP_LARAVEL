
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Products</title>
</head>
<body>
  <p>
    <h1>hello from index page</h1>
  </p>
   <ul>
      @foreach($products as $product)
      <li class="item"> {{$product['product_number']}}  </li>
      <li class="item"> {{$product['name']}}  </li>
      <li class="item"> {{$product['price']}}  </li>
      <li class="item"> {{$product['cost']}}  </li>
      <li class="item"> {{$product['description']}}  </li>
      @endforeach
  </ul>
</body>
</html>
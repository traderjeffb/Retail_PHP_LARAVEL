
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
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Catagory</th>
        <th scope="row">Product Number</th>
        <th scope="row">Name</th>
        <th scope="row">Retail Price</th>
        <th scope="row">Cost</th>
        <th scope="row">Description</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>{{$product['catagory']}}</td>
        <td>{{$product['product_number']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['cost']}}</td>
        <td>{{$product['description']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Employees</title>
</head>
<body>
    <div class="pageTitle">Index of Employees</div>
  <table class="table">
    <thead>
      <tr>
        <th>First</th>
        <th>Last</th>
        <th>email</th></th>
        <th>Street Address</th>
        <th>City</th>
        <th>State</th>
        <th>Department</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
      <tr>
        <td class="tableData">{{$employee['first']}}</td>
        <td class="tableData">{{$employee['last']}}</td>
        <td class="tableData">{{$employee['email']}}</td>
        <td class="tableData">{{$employee['street_address']}}</td>
        <td class="tableData">{{$employee['city']}}</td>
        <td class="tableData">{{$employee['state']}}</td>
        <td class="tableData" >
        <td class="tableData">{{$employee['state']}}</td>
        <td class="tableData" >
        <td class="tableData">{{$employee['state']}}</td>
        <td class="tableData" >
        <td class="tableData">{{$employee['department']}}</td>
        <td class="tableData" >
        <td class="tableData">{{$employee['salary']}}</td>
        <td class="tableData" >
          <a href="employees/edit{{$employee['id']}}">Edit</a>
          <a href="products/details{{$employee['id']}}">Details</a>
          <a href="products/delete{{$employee['id']}}">Delete</a>
        </td>
      </tr>


      @endforeach
    </tbody>
  </table>
</body>
</html>
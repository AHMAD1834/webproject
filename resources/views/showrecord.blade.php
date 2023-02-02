
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>records of all products</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SAMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{url('/addrecord')}}">Adding a products</a>
      <a class="nav-item nav-link" href="{{url('/about')}}">About</a>
      <a class="nav-item nav-link " href="{{url('/showrecord')}}">Show All Records</a>
    </div>
  </div>
</nav>
    <div class="container mt-3">
        <h2 style="text-align:center;">All Records of Products</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
               
                <th>PRODUCT NAME</th>
                <th>PRODUCT TYPE</th>
                <th>PRODUCT COMPANY</th>
                <th>NUMBER OF PRODUCT</th>
                
            </tr>
</thead>
<tbody>
    @foreach($product as $value)
    <tr>
   
        <td>{{$value->product_name}}</td>
        <td>{{$value->product_type}}</td>
        <td>{{$value->product_company}}</td>
        <td>{{$value->no_of_product}}</td>
        
        
</tr>
@endforeach
</tbody>

        </table>

    </div>

    
</body>

</html>
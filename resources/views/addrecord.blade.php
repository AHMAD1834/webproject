
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>products</title>
</head>

<body>
  <div>
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
      <a class="nav-item nav-link" href="{{url('/showrecord')}}">Show All Records</a>
    </div>
  </div>
</nav>

    <form action="{{url('/')}}/addrecord" method="post">
        @csrf
      <div class="form-group">
        <h2 style="text-align:center;">Adding a new Products</h2>
        <label for="exampleInputEmail1">product Name</label>
        <input type="text" class="form-control" id="text_1" name="product_name" aria-describedby="emailHelp"
          placeholder="please enter a name of product">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">product Type</label>
        <input type="text" class="form-control" id="text_3" name="product_type"
          placeholder="please enter a product type like bat ball footbal etc">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">product company Name</label>
        <input type="text" class="form-control" id="text_4" name="product_company"
          placeholder="please enter a company name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Number of product</label>
        <input type="text" class="form-control" id="text_5" name="no_of_product"
          placeholder="How Many ">
      </div>

      <button type="submit" class="btn btn-primary">ADDING THIS PRODUCT</button>
    </form>
   
</body>

</html>
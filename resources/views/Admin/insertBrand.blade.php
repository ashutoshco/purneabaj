<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insrtcat</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav  class="navbar navbar-expand -lg navbar-dark bg-success">
        <div class="container">
            <a href="" class="navbar-brand">Admin!Panel</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include("Admin.side")
            </div>
            <div class="col-9">
                <div class="row">
<div class="card">
    <div class="card-body">
        <form action="{{route('store')}}" method="post">

        @csrf
        
        <div class="mb-3">
            <label> Brand</label>
            <input type="text"  name="brands_title"class='form-control'>
        </div>
        <div class="mb-3 text-center">
            <input type="submit" class="btn btn-danger">
        </div>
        </form>

</div>
</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purnea Bajar</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class ="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">purneaBajar</a>
        <form action="" method ="GET" class="d-flex">
            <input type=" text "name="search" class="form-control"> 
        <input type="submit"  name="find" class="btn btn-danger ">
</form>
<ul class="navbar-nav">
    <li class="nav-item"><a href=""class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{route('register')}}"class="nav-link">signup</a></li>
    <li class="nav-item"><a href="{{route('login')}}"class="nav-link">Login</a></li>
<li class="nav-item"><a href=""class="nav-link">cart<span class="position-absolute  translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span></a></li>

</ul>
        
        </div>
</nav>
@section('content')

@show
</body>
</html>
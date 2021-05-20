<?php 
use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user')) {
  $total = ProductController::cartItem();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=he, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid navbar">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header icon">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">E-Commerce</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="{{ url('/') }}">Home </a></li>
              <li><a href="myorders">My Oders</a></li>
              
            </ul>
            <form action="search" method="get" class="navbar-form navbar-left">
              <div class="form-group">
                <input  type="text" name="query" class="form-control search-box" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default search">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="cartlist">Add To Cart({{$total}})</a></li>
              @if(Session::has('user'))
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="logout">Log Out</a></li>
                  
                </ul>
              </li>
              @else
              <li><a href="login">Sign In</a></li>
              <li><a href="register">Sign Up</a></li>
              @endif
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
</body>
</html>
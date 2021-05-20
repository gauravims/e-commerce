<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
{{ View::make('header') }}
    @yield('content')
    {{ View::make('footer')}}
</body>
<style>
.custom-login{
 background-color: #fa9d07;
 height: 500px;
 padding-top: 100px;
}
.slider-img{
    height: 400px !important;
}
.custom-product{
    height: 600px;
}
.slider-text{
    background-color: #24465454 !important;
}
.tranding-img{
    height: 150px;
}
.tranding-item{
    float: left;
    width: 20%;
}
.tranding-wrapper{
    margin: 20px;
}
.detail-img{
    height: 300px;
}
.search-box{
    width: 500px !important;
}
.cart-list-devider{
  border-bottom: 1px solid #ccc;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
.navbar{
    background-color: #6ce6dd;
}
.search{
    background-color: #2f6bdb;
    color: #ccc;
}


</style>


<script>
$(document).ready(function(){
  
    })
});

</script>
</html>
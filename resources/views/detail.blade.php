@extends('master')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a class="btn btn-info" href="{{ url('/') }}">Back To Home</a>
            <h2>Name : {{$product['name']}} </h2>
            <h3>Price : {{$product['price']}}</h3>
            <h3>Category : {{$product['category']}}</h3><br>

            <h4>Description : {{$product['description']}}</h4>
            <br /><br />
            <form action="add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}} ">
                @csrf
                <button class="btn btn-success btn-lg">Add To Cart</button>
            </form><br>
            <button class="btn btn-warning btn-lg">Place Order</button>
        </div>
    </div>

</div>

@endsection
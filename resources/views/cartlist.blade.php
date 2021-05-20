@extends('master')
@section('content')

<div class="custom-product">
 
  <div class="col-sm-10">

    <div class="tranding-wrapper">
        
            <h3>Result for Product</h3>
            <a class="btn btn-warning btn-lg" href="ordernow">Place Oder</a><br><br>
            @foreach ($products as $item)
              <div class="row search-item cart-list-devider">
                  <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="tranding-img" src="{{ $item->gallery }}">
                    
                        </a>

                  </div>
                  <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                          <h2>{{$item->name}}</h2>
                          <h4>{{$item->description}}</h4>
            
                        </div>
                        </a>

                  </div>
                  <div class="col-sm-4">
                <a href="removecart{{$item->carts_id}}" class="btn btn-danger btn-lg">Remove From Cart</a>
                  </div>
              </div>
              @endforeach
            </div>
  </div>
  
</div>

@endsection
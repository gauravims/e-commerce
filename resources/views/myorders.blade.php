@extends('master')
@section('content')

<div class="custom-product">
 
  <div class="col-sm-10">

    <div class="tranding-wrapper">
        
            <h3>My Orders</h3>
           
            @foreach ($orders as $item)
              <div class="row search-item cart-list-devider">
                  <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="tranding-img" src="{{ $item->gallery }}">
                    
                        </a>

                  </div>
                  <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                          <h2>Name :{{$item->name}}</h2>
                          <h4>Status: {{$item->status}}</h4>
                          <h4>Address:{{$item->address}}</h4>
                          <h4>Payment Status: {{$item->payment_status}}</h4>
                          <h4>Payment Method:{{$item->payment_method}}</h4>

            
                        </div>
                        </a>

                  </div>
                  <div class="col-sm-4">
                  </div>
              </div>
              @endforeach
            </div>
  </div>
  
</div>

@endsection
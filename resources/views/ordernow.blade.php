@extends('master')
@section('content')

<div class="custom-product">
 
  <div class="col-sm-10">

    <table class="table">
        {{-- <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
          </tr>
        </thead> --}}
        <tbody>
          <tr>
            <td>Amount</td>
            <td>Rs {{$total}}</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>Rs 0</td>
            <td>mary@example.com</td>
          </tr>
          <tr>
            <td>Delivery Charge</td>
            <td>Rs 50</td>
            <td>july@example.com</td>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>Rs {{$total+50}}</td>
            <td>july@example.com</td>
          </tr>
        </tbody>
      </table>
      <div>
        <form action="orderpace" method="POST">
            @csrf
            <div class="form-group">
       
              <textarea name="address" placeholder="Enter Your address" class="form-control" ></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Payment :</label><br><br>
              <a href="stripe" value="cash" name="payment" class="btn btn-info">  <span>Online Payment</span><a><br><br>
              <input type="radio" value="cash" name="payment">  <span>EMI Payment</span><br><br>

              <input type="radio" value="cash" name="payment">  <span>Pay on delivery</span><br><br>

            </div>
            
            <button type="submit" class="btn btn-success btn-lg">Buy Now</button>
          </form>
      </div>
  </div>
  
</div>

@endsection
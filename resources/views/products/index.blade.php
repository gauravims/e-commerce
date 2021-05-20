
@extends('products.layout')
     
@section('content')

<br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <a class="btn btn-warning" href="dashboard">Home </a><br>
                <h2>Veg Upload</h2>
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ ('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Gallery</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Description</th>


            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{ $product->gallery }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->description }}</td>

            <td>
                <form action="{{ ('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ ('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ ('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}
    
        
@endsection
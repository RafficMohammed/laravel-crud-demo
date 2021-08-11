@extends('products.layout')

@section('content')


<div class="container">
<a class="btn btn-info" href="{{route('products.create')}}">Create</a>
</div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td>{{$product->price}}</td>

            <td><a class="btn btn-info" href="{{route('products.show',$product->id)}}">Show</a>
                <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Edit</a>
                <form action="{{route('products.destroy',$product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')

                <button class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>

        @endforeach


    </tbody>
  </table>
  {{$products->links()}}

@endsection

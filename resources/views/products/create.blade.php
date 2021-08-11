@extends('products.layout')

@section('content')

<div class="container">
    <a class="btn btn-primary" href="{{route('products.index')}}">back</a>
</div>
@if($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Oops!</strong> You should enter all the fields
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @foreach ($errors->all() as $error )
  <ul>
      <li>{{$error}}</li>
  </ul>

  @endforeach
@endif
<div class="container">
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label>Product Name</label>
      <input type="text" class="form-control" name="name" placeholder="name">

    </div>
    <div class="form-group">
        <label>Product Detail</label>
        <input type="textarea" class="form-control" name="detail" placeholder="Detail">
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="text" class="form-control" name="price" placeholder="price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</div>
@endsection

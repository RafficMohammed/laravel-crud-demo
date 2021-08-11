@extends('products.layout')

@section('content')

<a href="{{route('products.index')}}">Back</a>
    <h1>{{$product->name}}</h1>
    <p>{{$product->detail}} :: Price:{{$product->price}}</p>

@endsection

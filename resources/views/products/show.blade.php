{{-- resources/views/products/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>
    <p>Name: {{ $product->name }}</p>
    <p>Price: {{ $product->current_price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <p>Supplier: {{ $product->supplier->name }}</p>
    <p>Category: {{ $product->category->name }}</p>
    <a href="{{ route('products.index') }}">Back to List</a>
@endsection

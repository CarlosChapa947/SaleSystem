{{-- resources/views/products/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}">Add New Product</a>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->name }} - {{ $product->category->name }} - {{ $product->supplier->name }}
                <a href="{{ route('products.show', $product->product_id) }}">View</a>
                <a href="{{ route('products.edit', $product->product_id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->product_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

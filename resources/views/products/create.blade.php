{{-- resources/views/products/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="current_price">Price:</label>
        <input type="number" name="current_price" id="current_price" step="0.01" required>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required>

        <label for="supplier_id">Supplier:</label>
        <select name="supplier_id" id="supplier_id">
            @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->supplier_id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>

        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->category_id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit">Add Product</button>
    </form>
@endsection

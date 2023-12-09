{{-- resources/views/products/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->product_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>

        <label for="current_price">Price:</label>
        <input type="number" name="current_price" id="current_price" value="{{ $product->current_price }}" step="0.01" required>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>

        <label for="supplier_id">Supplier:</label>
        <select name="supplier_id" id="supplier_id">
            @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->supplier_id }}" {{ $product->supplier_id == $supplier->supplier_id ? 'selected' : '' }}>
                    {{ $supplier->name }}
                </option>
            @endforeach
        </select>

        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->category_id }}" {{ $product->category_id == $category->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Update Product</button>
    </form>
@endsection

{{-- resources/views/saleDetails/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Add New Sale Detail</h1>
    <form action="{{ route('saleDetails.store') }}" method="POST">
        @csrf

        <label for="sale_id">Sale ID:</label>
        <select name="sale_id" id="sale_id">
            @foreach ($sales as $sale)
                <option value="{{ $sale->sale_id }}">{{ $sale->sale_id }}</option>
            @endforeach
        </select>

        <label for="product_id">Product:</label>
        <select name="product_id" id="product_id">
            @foreach ($products as $product)
                <option value="{{ $product->product_id }}">{{ $product->name }}</option>
            @endforeach
        </select>

        <label for="sale_price">Sale Price:</label>
        <input type="number" name="sale_price" id="sale_price" step="0.01" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required>

        <label for="total_amount">Total Amount:</label>
        <input type="number" name="total_amount" id="total_amount" step="0.01" required>

        <button type="submit">Add Sale Detail</button>
    </form>
@endsection

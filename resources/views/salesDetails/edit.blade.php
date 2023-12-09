{{-- resources/views/saleDetails/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Sale Detail</h1>
    <form action="{{ route('saleDetails.update', $detail->sale_detail_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="sale_id">Sale ID:</label>
        <select name="sale_id" id="sale_id">
            @foreach ($sales as $sale)
                <option value="{{ $sale->sale_id }}" {{ $detail->sale_id == $sale->sale_id ? 'selected' : '' }}>
                    {{ $sale->sale_id }}
                </option>
            @endforeach
        </select>

        <label for="product_id">Product:</label>
        <select name="product_id" id="product_id">
            @foreach ($products as $product)
                <option value="{{ $product->product_id }}" {{ $detail->product_id == $product->product_id ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
            @endforeach
        </select>

        <label for="sale_price">Sale Price:</label>
        <input type="number" name="sale_price" id="sale_price" value="{{ $detail->sale_price }}" step="0.01" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="{{ $detail->quantity }}" required>

        <label for="total_amount">Total Amount:</label>
        <input type="number" name="total_amount" id="total_amount" value="{{ $detail->total_amount }}" step="0.01" required>

        <button type="submit">Update Sale Detail</button>
    </form>
@endsection

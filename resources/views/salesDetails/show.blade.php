{{-- resources/views/saleDetails/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Sale Detail</h1>
    <p>Sale ID: {{ $detail->sale->sale_id }}</p>
    <p>Product: {{ $detail->product->name }}</p>
    <p>Sale Price: {{ $detail->sale_price }}</p>
    <p>Quantity: {{ $detail->quantity }}</p>
    <p>Total Amount: {{ $detail->total_amount }}</p>
    <a href="{{ route('saleDetails.index') }}">Back to List</a>
@endsection

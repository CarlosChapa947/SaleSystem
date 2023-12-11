{{-- resources/views/sales/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Sale Details</h1>
    <p>Client: {{ $sale->client->name }}</p>
    <p>Date: {{ (new DateTime($sale->date))->format('Y-m-d') }}</p>
    <p>Discount: {{ $sale->discount }}</p>
    <p>Final Amount: {{ $sale->final_amount }}</p>

    <h2>Sale Products</h2>
    <ul>
        @foreach ($sale->saleDetails as $detail)
            <li>
                Product: {{ $detail->product->name }}, Quantity: {{ $detail->quantity }}, Price: {{ $detail->sale_price }}
            </li>
        @endforeach
    </ul>

    <a href="{{ route('sales.index') }}">Back to List</a>
@endsection

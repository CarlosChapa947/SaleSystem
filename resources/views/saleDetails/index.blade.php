{{-- resources/views/saleDetails/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Sale Details List</h1>
    <a href="{{ route('saleDetails.create') }}">Add New Sale Detail</a>
    <ul>
        @foreach ($saleDetails as $detail)
            <li>
                Sale ID: {{ $detail->sale->sale_id }} - Product: {{ $detail->product->name }} - Quantity: {{ $detail->quantity }}
                <a href="{{ route('saleDetails.show', $detail->sale_detail_id) }}">View</a>
                <a href="{{ route('saleDetails.edit', $detail->sale_detail_id) }}">Edit</a>
                <form action="{{ route('saleDetails.destroy', $detail->sale_detail_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

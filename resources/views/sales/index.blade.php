{{-- resources/views/sales/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Sales List</h1>
    <a href="{{ route('sales.create') }}">Record New Sale</a>
    <ul>
        @foreach ($sales as $sale)
            <li>
                Sale ID: {{ $sale->sale_id }} - Client: {{ $sale->client->name }} - Date: {{ $sale->date->format('Y-m-d') }}
                <a href="{{ route('sales.show', $sale->sale_id) }}">View</a>
                <a href="{{ route('sales.edit', $sale->sale_id) }}">Edit</a>
                <form action="{{ route('sales.destroy', $sale->sale_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

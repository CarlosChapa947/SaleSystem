{{-- resources/views/sales/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Sale</h1>
    <form action="{{ route('sales.update', $sale->sale_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="client_id">Client:</label>
        <select name="client_id" id="client_id">
            @foreach ($clients as $client)
                <option value="{{ $client->client_id }}" {{ $sale->client_id == $client->client_id ? 'selected' : '' }}>
                    {{ $client->name }}
                </option>
            @endforeach
        </select>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" value="{{ $sale->date->format('Y-m-d') }}" required>

        <label for="discount">Discount:</label>
        <input type="number" name="discount" id="discount" value="{{ $sale->discount }}" step="0.01">

        <label for="final_amount">Final Amount:</label>
        <input type="number" name="final_amount" id="final_amount" value="{{ $sale->final_amount }}" required>

        <button type="submit">Update Sale</button>
    </form>
@endsection

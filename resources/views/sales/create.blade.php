{{-- resources/views/sales/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Record New Sale</h1>
    <form action="{{ route('sales.store') }}" method="POST">
        @csrf

        <label for="client_id">Client:</label>
        <select name="client_id" id="client_id">
            @foreach ($clients as $client)
                <option value="{{ $client->client_id }}">{{ $client->name }}</option>
            @endforeach
        </select>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>

        <label for="discount">Discount:</label>
        <input type="number" name="discount" id="discount" step="0.01">

        <label for="final_amount">Final Amount:</label>
        <input type="number" name="final_amount" id="final_amount" required>

        <button type="submit">Record Sale</button>
    </form>
@endsection

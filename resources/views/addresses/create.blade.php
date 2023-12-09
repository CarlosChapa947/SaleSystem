{{-- resources/views/addresses/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Add New Address</h1>
    <form action="{{ route('addresses.store') }}" method="POST">
        @csrf

        <label for="client_id">Client:</label>
        <select name="client_id" id="client_id" required>
            @foreach ($clients as $client)
                <option value="{{ $client->client_id }}">{{ $client->name }}</option>
            @endforeach
        </select>

        <label for="street">Street:</label>
        <input type="text" name="street" id="street" required>

        <label for="number">Number:</label>
        <input type="text" name="number" id="number" required>

        <label for="colony">Colony:</label>
        <input type="text" name="colony" id="colony" required>

        <label for="city">City:</label>
        <input type="text" name="city" id="city" required>

        <button type="submit">Add Address</button>
    </form>
@endsection

{{-- resources/views/addresses/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Address</h1>
    <form action="{{ route('addresses.update', $address->address_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="client_id">Client:</label>
        <select name="client_id" id="client_id" required>
            @foreach ($clients as $client)
                <option value="{{ $client->client_id }}" {{ $address->client_id == $client->client_id ? 'selected' : '' }}>
                    {{ $client->name }}
                </option>
            @endforeach
        </select>

        <label for="street">Street:</label>
        <input type="text" name="street" id="street" value="{{ $address->street }}" required>

        <label for="number">Number:</label>
        <input type="text" name="number" id="number" value="{{ $address->number }}" required>

        <label for="colony">Colony:</label>
        <input type="text" name="colony" id="colony" value="{{ $address->colony }}" required>

        <label for="city">City:</label>
        <input type="text" name="city" id="city" value="{{ $address->city }}" required>

        <button type="submit">Update Address</button>
    </form>
@endsection

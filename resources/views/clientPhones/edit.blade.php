{{-- resources/views/clientPhones/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Phone Number</h1>
    <form action="{{ route('clientPhones.update', $clientPhone->phone_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="client_id">Client:</label>
        <select name="client_id" id="client_id" required>
            @foreach ($clients as $client)
                <option value="{{ $client->client_id }}" {{ $clientPhone->client_id == $client->client_id ? 'selected' : '' }}>
                    {{ $client->name }}
                </option>
            @endforeach
        </select>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" value="{{ $clientPhone->phone }}" required>

        <button type="submit">Update Phone Number</button>
    </form>
@endsection

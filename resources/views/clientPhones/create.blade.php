{{-- resources/views/clientPhones/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Add New Phone Number</h1>
    <form action="{{ route('clientPhones.store') }}" method="POST">
        @csrf

        <label for="client_id">Client:</label>
        <select name="client_id" id="client_id" required>
            @foreach ($clients as $client)
                <option value="{{ $client->client_id }}">{{ $client->name }}</option>
            @endforeach
        </select>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required>

        <button type="submit">Add Phone Number</button>
    </form>
@endsection

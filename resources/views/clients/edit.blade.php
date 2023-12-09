{{-- resources/views/clients/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Client</h1>
    <form action="{{ route('clients.update', $client->client_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $client->name }}" required>
        
        <label for="rut">RUT:</label>
        <input type="text" name="rut" id="rut" value="{{ $client->rut }}" required>

        <button type="submit">Update Client</button>
    </form>
@endsection

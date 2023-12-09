{{-- resources/views/clients/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Add New Client</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="rut">RUT:</label>
        <input type="text" name="rut" id="rut" required>

        <button type="submit">Add Client</button>
    </form>
@endsection

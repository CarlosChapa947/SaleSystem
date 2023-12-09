{{-- resources/views/suppliers/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Add New Supplier</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="rut">RUT:</label>
        <input type="text" name="rut" id="rut" required>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">

        <label for="website">Website:</label>
        <input type="text" name="website" id="website">

        <button type="submit">Add Supplier</button>
    </form>
@endsection

{{-- resources/views/suppliers/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Supplier</h1>
    <form action="{{ route('suppliers.update', $supplier->supplier_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $supplier->name }}" required>
        
        <label for="rut">RUT:</label>
        <input type="text" name="rut" id="rut" value="{{ $supplier->rut }}" required>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="{{ $supplier->address }}" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ $supplier->phone }}">

        <label for="website">Website:</label>
        <input type="text" name="website" id="website" value="{{ $supplier->website }}">

        <button type="submit">Update Supplier</button>
    </form>
@endsection

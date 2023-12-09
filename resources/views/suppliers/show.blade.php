{{-- resources/views/suppliers/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Supplier Details</h1>
    <p>Name: {{ $supplier->name }}</p>
    <p>RUT: {{ $supplier->rut }}</p>
    <p>Address: {{ $supplier->address }}</p>
    <p>Phone: {{ $supplier->phone }}</p>
    <p>Website: {{ $supplier->website }}</p>
    <a href="{{ route('suppliers.index') }}">Back to List</a>
@endsection

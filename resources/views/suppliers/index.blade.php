{{-- resources/views/suppliers/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Suppliers List</h1>
    <a href="{{ route('suppliers.create') }}">Add New Supplier</a>
    <ul>
        @foreach ($suppliers as $supplier)
            <li>
                {{ $supplier->name }}
                <a href="{{ route('suppliers.show', $supplier->supplier_id) }}">View</a>
                <a href="{{ route('suppliers.edit', $supplier->supplier_id) }}">Edit</a>
                <form action="{{ route('suppliers.destroy', $supplier->supplier_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

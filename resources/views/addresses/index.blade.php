{{-- resources/views/addresses/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Addresses List</h1>
    <a href="{{ route('addresses.create') }}">Add New Address</a>
    <ul>
        @foreach ($addresses as $address)
            <li>
                {{ $address->street }}, {{ $address->city }}
                <a href="{{ route('addresses.show', $address->address_id) }}">View</a>
                <a href="{{ route('addresses.edit', $address->address_id) }}">Edit</a>
                <form action="{{ route('addresses.destroy', $address->address_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

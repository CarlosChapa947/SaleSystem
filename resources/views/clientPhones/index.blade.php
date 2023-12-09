{{-- resources/views/clientPhones/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Client Phone Numbers</h1>
    <a href="{{ route('clientPhones.create') }}">Add New Phone Number</a>
    <ul>
        @foreach ($clientPhones as $phone)
            <li>
                {{ $phone->client->name }} - {{ $phone->phone }}
                <a href="{{ route('clientPhones.show', $phone->phone_id) }}">View</a>
                <a href="{{ route('clientPhones.edit', $phone->phone_id) }}">Edit</a>
                <form action="{{ route('clientPhones.destroy', $phone->phone_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

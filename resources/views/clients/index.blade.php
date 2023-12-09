{{-- resources/views/clients/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Clients List</h1>
    <a href="{{ route('clients.create') }}">Add New Client</a>
    <ul>
        @foreach ($clients as $client)
            <li>
                {{ $client->name }}
                <a href="{{ route('clients.show', $client->client_id) }}">View</a>
                <a href="{{ route('clients.edit', $client->client_id) }}">Edit</a>
                <form action="{{ route('clients.destroy', $client->client_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

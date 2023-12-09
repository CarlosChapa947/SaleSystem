{{-- resources/views/clients/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Client Details</h1>
    <p>Name: {{ $client->name }}</p>
    <p>RUT: {{ $client->rut }}</p>
    <a href="{{ route('clients.index') }}">Back to List</a>
@endsection

{{-- resources/views/addresses/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Address Details</h1>
    <p>Client: {{ $address->client->name }}</p>
    <p>Street: {{ $address->street }}</p>
    <p>Number: {{ $address->number }}</p>
    <p>Colony: {{ $address->colony }}</p>
    <p>City: {{ $address->city }}</p>
    <a href="{{ route('addresses.index') }}">Back to List</a>
@endsection

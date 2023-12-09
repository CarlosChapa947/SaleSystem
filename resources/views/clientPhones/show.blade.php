{{-- resources/views/clientPhones/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Phone Number Details</h1>
    <p>Client: {{ $phone->client->name }}</p>
    <p>Phone Number: {{ $phone->phone }}</p>
    <a href="{{ route('clientPhones.index') }}">Back to List</a>
@endsection

{{-- resources/views/categories/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>
    <p>Name: {{ $category->name }}</p>
    <p>Description: {{ $category->description }}</p>
    <a href="{{ route('categories.index') }}">Back to List</a>
@endsection

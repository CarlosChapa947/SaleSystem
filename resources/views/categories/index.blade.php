{{-- resources/views/categories/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Product Categories</h1>
    <a href="{{ route('categories.create') }}">Add New Category</a>
    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->name }}
                <a href="{{ route('categories.show', $category->category_id) }}">View</a>
                <a href="{{ route('categories.edit', $category->category_id) }}">Edit</a>
                <form action="{{ route('categories.destroy', $category->category_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

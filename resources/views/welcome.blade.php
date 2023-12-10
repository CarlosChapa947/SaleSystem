{{-- resources/views/welcome.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to Our Sales Management System</h1>
        <p>This is the homepage of your Sales Management System. Navigate through the system using the links below.</p>
        
        <div class="links">
            <a href="{{ route('suppliers.index') }}">Suppliers</a>
            <a href="{{ route('clients.index') }}">Clients</a>
            <a href="{{ route('addresses.index') }}">Addresses</a>
            <a href="{{ route('clientPhones.index') }}">Client Phones</a>
            <a href="{{ route('categories.index') }}">Categories</a>
            <a href="{{ route('products.index') }}">Products</a>
            <a href="{{ route('sales.index') }}">Sales</a>
            <a href="{{ route('saleDetails.index') }}">Sale Details</a>
        </div>
    </div>
@endsection

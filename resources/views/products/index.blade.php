{{-- resources/views/products/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Productos</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Agregar Nuevo Producto</a>
        <ul class="list-group mt-3">
            @foreach ($products as $product)
                <li class="list-group-item">
                    {{ $product->name }} - {{ $product->category->name }} - {{ $product->supplier->name }}
                    <div class="float-right">
                        <a href="{{ route('products.show', $product->product_id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('products.edit', $product->product_id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('products.destroy', $product->product_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
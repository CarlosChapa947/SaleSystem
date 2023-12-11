{{-- resources/views/products/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1>Lista de Productos</h1>
             <a href="{{ route('products.create') }}" class="btn btn-primary">Agregar Nuevo Producto</a> <!-- Esto debe ir a la derecha -->
        </div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Precio actual</th>
                <th>Stock</th>
                <th>Distribuidor</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->category->name }}
                    </td>
                    <td>
                        {{ $product->current_price }}
                    </td>
                    <td>
                        {{ $product->stock }}
                    </td>
                    <td>
                        {{ $product->supplier->name }}
                    </td>
                    <!-- <td>
                        <a href="{{ route('products.show', $product->product_id) }}" class="btn btn-info btn-sm">Ver</a>
                    </td> -->
                    <td>
                        <a href="{{ route('products.edit', $product->product_id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->product_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                        
                        
                </tr>
            @endforeach
        </table>
    </div>
@endsection
{{-- resources/views/suppliers/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Proveedores</h1>
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Agregar Nuevo Proveedor</a>
        <ul class="list-group mt-3">
            @foreach ($suppliers as $supplier)
                <li class="list-group-item">
                    {{ $supplier->name }}
                    <div class="float-right">
                        <a href="{{ route('suppliers.show', $supplier->supplier_id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('suppliers.edit', $supplier->supplier_id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('suppliers.destroy', $supplier->supplier_id) }}" method="POST" class="d-inline">
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

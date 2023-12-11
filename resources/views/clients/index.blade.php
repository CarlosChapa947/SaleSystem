{{-- resources/views/clients/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Clientes</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">Agregar Nuevo Cliente</a>
        <ul class="list-group mt-3">
            @foreach ($clients as $client)
                <li class="list-group-item">
                    {{ $client->name }}
                    <div class="float-right">
                        <a href="{{ route('clients.show', $client->client_id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('clients.edit', $client->client_id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('clients.destroy', $client->client_id) }}" method="POST" class="d-inline">
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

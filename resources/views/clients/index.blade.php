{{-- resources/views/clients/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Clientes</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">Agregar Nuevo Cliente</a>
        <table>
            <tr>
                <th>RUT</th>
                <th>Nombre</th>
            </tr>
            @foreach ($clients as $client)
                <tr>
                    
                    <div class="float-right">
                        <td>
                            {{ $client->client_id }}
                        </td>
                        <td>
                            {{ $client->name }}
                        </td>
                        <td>
                            <a href="{{ route('clients.edit', $client->client_id) }}" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('clients.destroy', $client->client_id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </div>
                </tr>
            @endforeach
</table>
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Display a listing of the clients
    public function index()
    {
        $clients = Client::withTrashed()->get();
        return view('clients.index', compact('clients'));
    }

    // Show the form for creating a new client
    public function create()
    {
        return view('clients.create');
    }

    // Store a newly created client in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rut' => 'required|unique:clients|max:255',
            'name' => 'required|max:255',
            // Add other necessary validation rules here
        ]);

        Client::create($validatedData);
        return redirect()->route('clients.index');
    }

    // Display the specified client
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    // Show the form for editing the specified client
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    // Update the specified client in the database
    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // Add other necessary validation rules here
        ]);

        $client->update($validatedData);
        return redirect()->route('clients.index');
    }

    // Remove the specified client from the database
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}

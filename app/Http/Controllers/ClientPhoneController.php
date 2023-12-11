<?php

namespace App\Http\Controllers;

use App\Models\ClientPhone;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientPhoneController extends Controller
{
    // Display a listing of the client phones
    public function index()
    {
        $clientPhones = ClientPhone::with('client')->withTrashed()->get();
        return view('clientPhones.index', compact('clientPhones'));
    }

    // Show the form for creating a new client phone
    public function create()
    {
        $clients = Client::all(); // Get a list of clients for the dropdown
        return view('clientPhones.create', compact('clients'));
    }

    // Store a newly created client phone in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,client_id',
            'phone' => 'required|max:255',
            // Add other necessary validation rules here
        ]);

        ClientPhone::create($validatedData);
        return redirect()->route('clientPhones.index');
    }

    // Display the specified client phone
    public function show(ClientPhone $clientPhone)
    {
        return view('clientPhones.show', compact('clientPhone'));
    }

    // Show the form for editing the specified client phone
    public function edit(ClientPhone $clientPhone)
    {
        $clients = Client::all(); // To select a client if needed
        return view('clientPhones.edit', compact('clientPhone', 'clients'));
    }

    // Update the specified client phone in the database
    public function update(Request $request, ClientPhone $clientPhone)
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,client_id',
            'phone' => 'required|max:255',
            // Add other necessary validation rules here
        ]);

        $clientPhone->update($validatedData);
        return redirect()->route('clientPhones.index');
    }

    // Remove the specified client phone from the database
    public function destroy(ClientPhone $clientPhone)
    {
        $clientPhone->delete();
        return redirect()->route('clientPhones.index');
    }
}

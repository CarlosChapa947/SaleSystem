<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    // Display a listing of the addresses
    public function index()
    {
        $addresses = Address::with('client')->get();
        return view('addresses.index', compact('addresses'));
    }

    // Show the form for creating a new address
    public function create()
    {
        $clients = Client::all(); // You might need a list of clients to select from
        return view('addresses.create', compact('clients'));
    }

    // Store a newly created address in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,client_id',
            'street' => 'required|max:255',
            'number' => 'required',
            'colony' => 'required|max:255',
            'city' => 'required|max:255',
            // Add other necessary validation rules here
        ]);

        Address::create($validatedData);
        return redirect()->route('addresses.index');
    }

    // Display the specified address
    public function show(Address $address)
    {
        return view('addresses.show', compact('address'));
    }

    // Show the form for editing the specified address
    public function edit(Address $address)
    {
        $clients = Client::all(); // To select a client if needed
        return view('addresses.edit', compact('address', 'clients'));
    }

    // Update the specified address in the database
    public function update(Request $request, Address $address)
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,client_id',
            'street' => 'required|max:255',
            'number' => 'required',
            'colony' => 'required|max:255',
            'city' => 'required|max:255',
            // Add other necessary validation rules here
        ]);

        $address->update($validatedData);
        return redirect()->route('addresses.index');
    }

    // Remove the specified address from the database
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('addresses.index');
    }
}

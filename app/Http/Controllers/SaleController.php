<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    // Display a listing of the sales
    public function index()
    {
        $sales = Sale::with('client')->withTrashed()->get();
        return view('sales.index', compact('sales'));
    }

    // Show the form for creating a new sale
    public function create()
    {
        $clients = Client::all(); // Get a list of clients for a dropdown
        // You might also need to fetch other related data like products
        return view('sales.create', compact('clients'));
    }

    // Store a newly created sale in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,client_id',
            'date' => 'required|date',
            'discount' => 'nullable|numeric',
            'final_amount' => 'required|numeric',
            // Add other necessary validation rules here
        ]);

        $sale = Sale::create($validatedData);
        // Handle the creation of sale details here (e.g., products sold)

        return redirect()->route('sales.index');
    }

    // Display the specified sale
    public function show(Sale $sale)
    {
        $sale->load('client', 'saleDetails');
        return view('sales.show', compact('sale'));
    }

    // Show the form for editing the specified sale
    public function edit(Sale $sale)
    {
        $clients = Client::all();
        // Fetch other necessary data for the edit form
        return view('sales.edit', compact('sale', 'clients'));
    }

    // Update the specified sale in the database
    public function update(Request $request, Sale $sale)
    {
        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,client_id',
            'date' => 'required|date',
            'discount' => 'nullable|numeric',
            'final_amount' => 'required|numeric',
            // Add other necessary validation rules here
        ]);

        $sale->update($validatedData);
        // Handle updates to sale details here (e.g., products sold)

        return redirect()->route('sales.index');
    }

    // Remove the specified sale from the database
    public function destroy(Sale $sale)
    {
        // Consider the implications of deleting a sale. You may need to handle related data.
        $sale->delete();
        return redirect()->route('sales.index');
    }
}

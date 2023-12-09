<?php

namespace App\Http\Controllers;

use App\Models\SaleDetail;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    // Display a listing of the sale details
    public function index()
    {
        $saleDetails = SaleDetail::with('sale', 'product')->get();
        return view('saleDetails.index', compact('saleDetails'));
    }

    // Show the form for creating a new sale detail
    public function create()
    {
        $sales = Sale::all(); // Get a list of sales for a dropdown
        $products = Product::all(); // Get a list of products for a dropdown
        return view('saleDetails.create', compact('sales', 'products'));
    }

    // Store a newly created sale detail in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sale_id' => 'required|exists:sales,sale_id',
            'product_id' => 'required|exists:products,product_id',
            'sale_price' => 'required|numeric',
            'quantity' => 'required|integer',
            'total_amount' => 'required|numeric',
            // Add other necessary validation rules here
        ]);

        SaleDetail::create($validatedData);
        return redirect()->route('saleDetails.index');
    }

    // Display the specified sale detail
    public function show(SaleDetail $saleDetail)
    {
        $saleDetail->load('sale', 'product');
        return view('saleDetails.show', compact('saleDetail'));
    }

    // Show the form for editing the specified sale detail
    public function edit(SaleDetail $saleDetail)
    {
        $sales = Sale::all();
        $products = Product::all();
        return view('saleDetails.edit', compact('saleDetail', 'sales', 'products'));
    }

    // Update the specified sale detail in the database
    public function update(Request $request, SaleDetail $saleDetail)
    {
        $validatedData = $request->validate([
            'sale_id' => 'required|exists:sales,sale_id',
            'product_id' => 'required|exists:products,product_id',
            'sale_price' => 'required|numeric',
            'quantity' => 'required|integer',
            'total_amount' => 'required|numeric',
            // Add other necessary validation rules here
        ]);

        $saleDetail->update($validatedData);
        return redirect()->route('saleDetails.index');
    }

    // Remove the specified sale detail from the database
    public function destroy(SaleDetail $saleDetail)
    {
        $saleDetail->delete();
        return redirect()->route('saleDetails.index');
    }
}

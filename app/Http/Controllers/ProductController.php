<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the products
    public function index()
    {
        $products = Product::with(['category', 'supplier'])->withTrashed()->get();
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product
    public function create()
    {
        $categories = Category::all(); // Get a list of categories for a dropdown
        $suppliers = Supplier::all(); // Get a list of suppliers for a dropdown
        return view('products.create', compact('categories', 'suppliers'));
    }

    // Store a newly created product in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'current_price' => 'required|numeric',
            'stock' => 'required|integer',
            'supplier_id' => 'required|exists:suppliers,supplier_id',
            'category_id' => 'required|exists:categories,category_id',
            // Add other necessary validation rules here
        ]);

        Product::create($validatedData);
        return redirect()->route('products.index');
    }

    // Display the specified product
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit(Product $product)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.edit', compact('product', 'categories', 'suppliers'));
    }

    // Update the specified product in the database
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'current_price' => 'required|numeric',
            'stock' => 'required|integer',
            'supplier_id' => 'required|exists:suppliers,supplier_id',
            'category_id' => 'required|exists:categories,category_id',
            // Add other necessary validation rules here
        ]);

        $product->update($validatedData);
        return redirect()->route('products.index');
    }

    // Remove the specified product from the database
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

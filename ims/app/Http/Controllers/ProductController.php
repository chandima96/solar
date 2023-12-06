<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'type' => 'required|string',
        // Add more validation rules for other fields in the products table
    ]);

    // Create a new product
    Product::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'type' => $request->input('type'),
        // Add more fields based on your product table structure
    ]);
        // Optionally, you can redirect the user with a success message
        return redirect('/inventory')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate the request
        $request->validate([
            'product_name' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Update the product
        $product->update([
            'product_name' => $request->input('product_name'),
            // Add more fields based on your product table structure
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Delete the product
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}

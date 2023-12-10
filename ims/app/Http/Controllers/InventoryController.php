<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BatchHasProduct;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index()
    {
        // $inventories = Inventory::all();
        // return view('inventories.index', compact('inventories'));
        $categoryController = new CategoryController(); 
        $activeCategories= $categoryController->activeCategories();

        $inventories = DB::table('products')
        ->join('batch_has_products', 'products.id', '=', 'batch_has_products.product_id')
        ->select('products.*', 'batch_has_products.*')
        ->get();
    //  dd($inventories);
    return view('inventory', compact('inventories','activeCategories'));
    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        // Validation rules for products table
        'product_name' => 'required|string',
        // Add more validation rules for other fields in the products table

        // Validation rules for batches table
        'batch_number' => 'required|string',
        // Add more validation rules for other fields in the batches table
      
        // Validation rules for batch_has_products table
        'product_id' => 'required|exists:products,id',
        'batch_id' => 'required|exists:batches,id',
        'quantity' => 'required|numeric',
        'available_quantity' => 'required|numeric',
        'price' => 'required|numeric',
        'type' => 'required|string',
        'damaged_quantity' => 'required|string',
        'brand' => 'required|string',
        'supplier_id' => 'required|string',
        'invoice_id' => 'required|string',
        'status' => 'required|integer',
    ]);

    // Create a new product
    $product = Product::create([
        'product_name' => $request->input('product_name'),
        // Add more fields based on your product table structure
    ]);

    // Create a new batch
    $batch = Batch::create([
        'batch_number' => $request->input('batch_number'),
        // Add more fields based on your batch table structure
    ]);

    // Create a new record in batch_has_products
    BatchHasProduct::create([
        'product_id' => $product->id,
        'batch_id' => $batch->id,
        'quantity' => $request->input('quantity'),
        'available_quantity' => $request->input('available_quantity'),
        'price' => $request->input('price'),
        'type' => $request->input('type'),
        'damaged_quantity' => $request->input('damaged_quantity'),
        'brand' => $request->input('brand'),
        'supplier_id' => $request->input('supplier_id'),
        'invoice_id' => $request->input('invoice_id'),
        'status' => $request->input('status'),
    ]);

    // Optionally, you can redirect the user with a success message

        // Create a new inventory
        // Inventory::create($request->all());

        return redirect()->route('inventories.index')->with('success', 'Inventory created successfully.');
    }

    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            // Add other validation rules as needed
        ]);

        // Update the inventory
        $inventory->update($request->all());

        return redirect()->route('inventories.index')->with('success', 'Inventory updated successfully.');
    }

    public function destroy(Inventory $inventory)
    {
        // Delete the inventory
        $inventory->delete();

        return redirect()->route('inventories.index')->with('success', 'Inventory deleted successfully.');
    }
}

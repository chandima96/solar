<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier', compact('suppliers'));
        // return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string',
        ]);
    
        // Create a new supplier

        Supplier::create($request->all());

        // return redirect()->route('suppliers.index')->with('success', 'Supplier created successfully.'); 
        return redirect('/supplier')->with('success', 'Supplier created successfully.');

    }

    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string',
        ]);

        // Update the supplier
        $supplier->update($request->all());

        return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully.');
    }

    public function destroy(Supplier $supplier)
    {
        // Delete the supplier
        $supplier->delete();

        return redirect()->route('suppliers.index')->with('success', 'Supplier deleted successfully.');
    }
}

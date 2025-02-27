<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Inventory/Index');
    }

    public function store(Request $request)
    {
        dd('test');
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'unit' => 'required|string|max:255',
            'store' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Save data
        Inventory::create($validated);

        // Redirect with success message
        return redirect()->route('inventory.index')->with('success', 'Inventory created successfully!');
    }
}

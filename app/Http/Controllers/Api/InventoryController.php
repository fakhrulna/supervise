<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;
use App\Models\Inventory;
use App\Http\Requests\InventoryStoreRequest;

class InventoryController extends Controller
{
    /**
     * Store data of the resource.
     *
     * @return Response
     */

    public function store(InventoryStoreRequest $request)
    {
        // Save data
        Inventory::create($request->validated());

        // Redirect with success message
        return redirect()->route('inventory.index')->with('success', 'Inventory created successfully!');
    }
}

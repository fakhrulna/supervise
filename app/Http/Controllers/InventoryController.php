<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Render the Inertia page with inventory data
        return Inertia::render('Inventory/Index', [
            'inventories' => Inventory::all()
        ]);
    }
}

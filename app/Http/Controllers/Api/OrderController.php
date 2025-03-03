<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;
use App\Models\Order;
use App\Http\Requests\OrderStoreRequest;

class OrderController extends Controller
{
    /**
     * Store data of the resource.
     *
     * @return Response
     */
    public function store(OrderStoreRequest $request)
    {
        // Save data
        Order::create($request->validated());

        // Redirect with success message
        return redirect()->route('inventory.index')->with('success', 'Inventory created successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Render the Inertia page with inventory data
        return Inertia::render('Order/Index', [
            'orders' => Order::all()
        ]);
    }
}

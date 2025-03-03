<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Render the Inertia page with inventory data
        return Inertia::render('Menu/Index', [
            'menus' => Menu::all()
        ]);
    }
}

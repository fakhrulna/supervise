<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Requests\MenuStoreRequest;

class MenuController extends Controller
{
    public function store(MenuStoreRequest $request)
    {
        // Save data
        $menu = Menu::create($request->validated());

        // Redirect with success message
        return response()->json(
            [
                'success' => 'Menu created successfully!',
                'menus' => $menu
            ],
            200
        );
    }
}

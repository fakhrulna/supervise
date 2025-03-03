<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Http\Requests\IngredientStoreRequest;

class IngredientController extends Controller
{
    public function store(IngredientStoreRequest $request)
    {
        // Save data
        $ingredient = Ingredient::create($request->validated());

        // Redirect with success message
        return response()->json([
            'success' => 'Ingredient created successfully!',
            'ingredients' => $ingredient
        ], 200);
    }
}

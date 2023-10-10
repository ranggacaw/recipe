<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function index()
    {
        $recipe = Recipe::all();

        return view('recipe.index', compact('recipe'));
    }

    public function details($id)
    {
        $recipe = Recipe::where('id', $id)->first();
        $ingredients = nl2br(str_replace(",", "<br><br>", $recipe->ingredient));
        $ingredients_coma = Recipe::where('ingredient', ' ')->count();

        return view('recipe.details', compact('recipe', 'ingredients', 'ingredients_coma'));
    }
}

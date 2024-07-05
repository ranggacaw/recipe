<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function index()
    {
        $recipe = Recipe::all();
        $category = Category::all();

        return view('recipe.index', compact('recipe', 'category'));
    }

    public function details($id)
    {
        $recipe = Recipe::where('id', $id)->first();
        $ingredients = nl2br(str_replace(",", "<br><br>", $recipe->ingredient));
        $coma = substr_count($recipe->ingredient, ",");
        $ingredients_coma = $coma + 1;

        return view('recipe.details', compact('recipe', 'ingredients', 'ingredients_coma'));
    }
    
    public function show($id)
    {
        $recipe = Recipe::where('category', $id)->get();
        $category_name = Category::where('id', $id)->first();
        $category = Category::all();

        // return $category_name;
        return view('recipe.show', compact('recipe', 'category', 'category_name'));
    }
}

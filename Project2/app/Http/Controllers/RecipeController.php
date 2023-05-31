<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     * Display all recipes
     */
    public function index()
    {
        return Recipe::all();
    }

    /**
     * Store a newly created resource in storage.
     * Creates a new recipe off user input
     */
    public function addrecipe(Request $request)
    {
        return Recipe::create($request->all());
    }

    /**
     * Display the specified resource.
     * Display's specific recipe/s
     */
    
    public function find(Request $request)
    {
        
        $RecipeID = $request->query('RecipeID');
        $result = DB::table('recipes')->where('RecipeID', $RecipeID)->get();
        
        // Check if the result is empty
        if ($result->isEmpty()) {
            return response()->json(['message' => 'Recipe not found'], 404);
        }

        return $result;
        
    }
  
     public function update(Request $request)
     {
         // Update the recipe with the provided data
         $Title = $request->input('Title');
         $Description = $request->input('Description');
         $Ingredients = $request->input('Ingredients');
         $Method = $request->input('Method');
         $item = DB::update('update Recipes set Title = ?, Description = ?, Ingredients = ?, Method = ?',[$Title,$Description,$Ingredients,$Method]);
         // Return a response indicating success
         return response()->json(['message' => 'Recipe updated successfully']);
     }
     
    public function delete(Request $request)
    {
        $recipeID = $request->query('RecipeID');
        // Delete associated records in other tables
        DB::table('Reviews')->where('RecipeID', $recipeID)->delete();
        #DB::table('Users')->where('RecipeID', $recipeID)->delete();
    
        // Delete related records in the User table
        User::where('Fav1', $recipeID)->orWhere('Fav2', $recipeID)->orWhere('Fav3', $recipeID)
            ->orWhere('Fav4', $recipeID)->orWhere('Fav5', $recipeID)->orWhere('Fav6', $recipeID)
            ->orWhere('Fav7', $recipeID)->orWhere('Fav8', $recipeID)->orWhere('Fav9', $recipeID)
            ->update([
                'Fav1' => 1,
                'Fav2' => 1,
                'Fav3' => 1,
                'Fav4' => 1,
                'Fav5' => 1,
                'Fav6' => 1,
                'Fav7' => 1,
                'Fav8' => 1,
                'Fav9' => 1
            ]);
    
        // Delete the main record
        $deletedRows = DB::table('Recipes')->where('RecipeID', $recipeID)->delete();
        if ($deletedRows > 0) {
            return response()->json(['message' => 'Recipe deleted successfully']);
        } else {
            return response()->json(['message' => 'Recipe not found'], 404);
        }
        return $deletedRows;
    }
}

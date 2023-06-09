<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class RecipeController extends Controller
{
    /**
     * Display all recipes
     */
    public function index()
    {
        return Recipe::all();
    }

    public function addrecipe(Request $request)
    {
        $validatedData = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Ingredients' => 'required',
            'Method' => 'required',
        ]);
    
        $recipe = new Recipe();
        $recipe->RecipeID = $this->generateUniqueRecipeID();
        $recipe->Title = $validatedData['Title'];
        $recipe->Description = $validatedData['Description'];
        $recipe->Ingredients = $validatedData['Ingredients'];
        $recipe->Method = $validatedData['Method'];
        $recipe->save();
    
        return response()->json([
            'message' => 'Recipe added successfully',
            'data' => $recipe,
        ]);
    }

    private function generateUniqueRecipeID()
    {
    $recipeID = mt_rand(1, 100);

    // Check if the generated RecipeID already exists in the database
    while (Recipe::where('RecipeID', $recipeID)->exists()) {
        $recipeID = mt_rand(1, 100);
    }

    return $recipeID;
    }
    /**
     * Display's specific recipe
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
    
    public function findRecipe(Request $request)
    {
        $query = $request->query('query');
    
        $result = DB::table('recipes')
            ->where('Title', 'LIKE', '%' . $query . '%')
            ->orWhere('Description', 'LIKE', '%' . $query . '%')
            ->select('Title', 'Description') // Select only the desired fields
            ->get();
    
        if ($result->isEmpty()) {
            return response()->json(['message' => 'No results found'], 404);
        }
    
        return $result;
    }
    

    public function findMultipleRecipes(Request $request)
    {
    $recipeIDs = $request->input('RecipeIDs');
    $recipeIDsArray = explode(',', $recipeIDs);

    $recipes = DB::table('recipes')->whereIn('RecipeID', $recipeIDsArray)->get();

    return response()->json($recipes);
    }
  
    /**
     * update a recipe based off ID
     */
     public function update(Request $request)
     {
         // Update the recipe with the provided data
         $RecipeID = $request->input('RecipeID');
         $Title = $request->input('Title');
         $Description = $request->input('Description');
         $Ingredients = $request->input('Ingredients');
         $Method = $request->input('Method');
         $updaterecipe = DB::update('update Recipes set Title = ?, Description = ?, Ingredients = ?, Method = ? where RecipeID = ?',[$Title,$Description,$Ingredients,$Method,$RecipeID]);
         // Return a response indicating success
         if($updaterecipe){
            return response()->json(['message' => 'Recipe has been updated successfully']);
         } else {
            return response()->json(['message' => 'Recipe has been updated successfully']);
         }
     }
     
    /**
     * Delete a recipe, deletes any review for the recipe
     * and updates and users favourites to default value
     */
    public function delete(Request $request)
    {
        $recipeID = $request->query('RecipeID');
        // Delete associated records in other tables
        DB::table('Reviews')->where('RecipeID', $recipeID)->delete();
    
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

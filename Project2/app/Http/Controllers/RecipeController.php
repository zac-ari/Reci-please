<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
<<<<<<< HEAD
=======
use App\Models\User;
use App\Models\Review;

>>>>>>> 3a67302ddb7def95c5886763d4639b1e35b36b70
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
<<<<<<< HEAD
     * Display a listing of the resource.
=======
     * Display all recipes
>>>>>>> 3a67302ddb7def95c5886763d4639b1e35b36b70
     */
    public function index()
    {
        return Recipe::all();
    }

    /**
<<<<<<< HEAD
     * Store a newly created resource in storage.
=======
     * Creates a new recipe off user input
>>>>>>> 3a67302ddb7def95c5886763d4639b1e35b36b70
     */
    public function addrecipe(Request $request)
    {
        return Recipe::create($request->all());
    }

    /**
<<<<<<< HEAD
     * Display the specified resource.
=======
     * Display's specific recipe/s
>>>>>>> 3a67302ddb7def95c5886763d4639b1e35b36b70
     */
    
    public function find(Request $request)
    {
        
        $RecipeID = $request->query('RecipeID');
        $result = DB::table('recipes')->where('RecipeID', $RecipeID)->get();
<<<<<<< HEAD
        
=======
        // Check if the result is empty
        if ($result->isEmpty()) {
            return response()->json(['message' => 'Recipe not found'], 404);
        }

>>>>>>> 3a67302ddb7def95c5886763d4639b1e35b36b70
        return $result;
        
    }

    
    /**
<<<<<<< HEAD
     * Update the specified resource in storage.
     */
    /*
    public function update(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $picture = $request->input('picture');
        $item = DB::update('update menus set name = ?,description=?,price=?,picture=? where name = ?',
            [$name,$description,$price,$picture,$name]);
        return $item;
    }
    */
=======
     * Allows the user to change the recipe details from the name of the recipe
     * Title,Description,Ingredients,Method
     * This is roughly how i would do an update function for the database; however, as a 
     * design priciple we decided against allowing this function.
     */
    
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
     
    
>>>>>>> 3a67302ddb7def95c5886763d4639b1e35b36b70

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    /*
    public function delete(Request $request)
    {
        $name = $request->query('name');
        $item = DB::delete('delete from menus where name = ?',[$name]);
        return $item;
    }
    */
}
=======
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
>>>>>>> 3a67302ddb7def95c5886763d4639b1e35b36b70

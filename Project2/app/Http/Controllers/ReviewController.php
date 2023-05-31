<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Review::all();
    }

    /**
     * Store a newly created review in the database
     */
    public function addreview(Request $request)
    {
        return Review::create($request->all());
    }

    /**
     * Display a specific review based off its ID.
     */
    
    public function find(Request $request)
    {
        
        $ReviewID = $request->query('ReviewID');
        $result = DB::table('recipes')->where('ReviewID', $ReviewID)->get();
        
        return $result;
        
    }

    
    /**
     * Allows the user to change the recipe details from the name of the recipe
     * Title,Description,Ingredients,Method
     * This is roughly how i would do an update function for the database; however, as a 
     * design priciple we decided against allowing this function.
     */
    
     public function update(Request $request)
     {
         // Update the recipe with the provided data
         $Rating = $request->input('Rating');
         $Comments = $request->input('Comments');
         $updatereview = DB::update('update Review set Rating = ?, Comments = ?',[$Rating,$Comments]);
         // Return a response indicating success
         if($updatereview){
            return response()->json(['message' => 'User review has been updated successfully']);
         } else {
            return response()->json(['message' => 'User review has been updated successfully']);
         }
     }
     
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $ReviewID = $request->query('ReviewID');
        $deletedRows = DB::delete('delete from Reviews where ReviewID = ?', [$ReviewID]);
    
        if ($deletedRows > 0) {
            return response()->json(['message' => 'Review deleted successfully']);
        } else {
            return response()->json(['message' => 'Review not found'], 404);
        }
    }
}

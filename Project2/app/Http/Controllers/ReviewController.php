<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display all reviews
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
     * Display a specific review based off its ID
     */
    
    public function find(Request $request)
    {
        
        $ReviewID = $request->query('ReviewID');
        $result = DB::table('reviews')->where('ReviewID', $ReviewID)->get();
        
        return $result;
        
    }

    /**
     * update review based off ID
     */
     public function update(Request $request)
     {
         // Update the recipe with the provided data
         $ReviewID = $request->input('ReviewID');
         $Rating = $request->input('Rating');
         $Comments = $request->input('Comments');
         $updatereview = DB::update('update Reviews set Rating = ?, Comments = ? where ReviewID = ?',[$Rating,$Comments,$ReviewID]);
         // Return a response indicating success
         if($updatereview){
            return response()->json(['message' => 'User review has been updated successfully']);
         } else {
            return response()->json(['message' => 'User review has been updated successfully']);
         }
     }
     
    /**
     * Delete a review
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

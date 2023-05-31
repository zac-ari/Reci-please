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
     * Store a newly created resource in storage.
     */
    public function addreview(Request $request)
    {
        return Review::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    
    public function find(Request $request)
    {
        
        $ReviewID = $request->query('ReviewID');
        $result = DB::table('recipes')->where('ReviewID', $ReviewID)->get();
        
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

    /**
     * Remove the specified resource from storage.
     */
    /*
    public function delete(Request $request)
    {
        $name = $request->query('name');
        $item = DB::delete('delete from menus where name = ?',[$name]);
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
         $Rating = $request->input('Rating');
         $Comments = $request->input('Comments');
         $item = DB::update('update Review set Rating = ?, Comments = ?',[$Rating,$Comments]);
         // Return a response indicating success
         return response()->json(['message' => 'User review has been updated successfully']);
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
>>>>>>> 3a67302ddb7def95c5886763d4639b1e35b36b70
}

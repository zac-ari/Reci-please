<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Create a new user.
     */
    public function adduser(Request $request)
    {
        return User::create($request->all());
    }

    /**
     * Find a specific user based off ID.
     */
    
    public function find(Request $request)
    {
        
        $UserID = $request->query('UserID');
        $result = DB::table('users')->where('UserID', $UserID)->get();
        
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
         // Update the user with the provided data
         $Username = $request->input('Username');
         $Email = $request->input('Email');
         $Password = $request->input('Password');
         $Fav1 = $request->input('Fav1');
         $Fav2 = $request->input('Fav2');
         $Fav3 = $request->input('Fav3');
         $Fav4 = $request->input('Fav4');
         $Fav5 = $request->input('Fav5');
         $Fav6 = $request->input('Fav6');
         $Fav7 = $request->input('Fav7');
         $Fav8 = $request->input('Fav8');
         $Fav9 = $request->input('Fav9');
         
         $item = DB::update('update users set Username = ?, Email = ?, Password = ?, Fav1 = ?, Fav2 = ?, Fav3 = ?
         , Fav4 = ?, Fav5 = ?, Fav6 = ?, Fav7 = ?, Fav8 = ?, Fav9 = ?',[$Username,$Email,$Password,$Fav1,$Fav2,$Fav3,$Fav4,$Fav5,$Fav6,$Fav7,$Fav8,$Fav9]);
         // Return a response indicating success
         return response()->json(['message' => 'User updated successfully']);
     }
     

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $UserID = $request->query('UserID');
        $deletedRows = DB::delete('delete from Users where UserID = ?', [$UserID]);
    
        if ($deletedRows > 0) {
            return response()->json(['message' => 'User deleted successfully']);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }
}

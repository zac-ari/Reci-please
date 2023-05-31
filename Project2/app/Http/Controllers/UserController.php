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
         // Get the UserID
         $userID = $request->input('UserID');
     
         // Find the user based on the UserID
         $user = User::find($userID);
     
         // Update the user with the provided data
         $user->Username = $request->input('Username');
         $user->Email = $request->input('Email');
         $user->Password = $request->input('Password');
         $user->Fav1 = $request->input('Fav1');
         $user->Fav2 = $request->input('Fav2');
         $user->Fav3 = $request->input('Fav3');
         $user->Fav4 = $request->input('Fav4');
         $user->Fav5 = $request->input('Fav5');
         $user->Fav6 = $request->input('Fav6');
         $user->Fav7 = $request->input('Fav7');
         $user->Fav8 = $request->input('Fav8');
         $user->Fav9 = $request->input('Fav9');
     
         // Save the updated user
         $user->save();
     
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

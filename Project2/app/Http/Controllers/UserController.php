<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display all users
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
     * Find a specific user based off ID
     */
    
    public function find(Request $request)
    {
        
        $UserID = $request->query('UserID');
        $result = DB::table('users')->where('UserID', $UserID)->get();
        
        return $result;
        
    }
    
    /**
     * Update the user based off ID
     */
     public function update(Request $request)
     {
         // Update the user with the provided data
         $UserID = $request->input('UserID');
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
         
         $updateuser = DB::update('update users set Username = ?, Email = ?, Password = ?, Fav1 = ?, Fav2 = ?, Fav3 = ?
         , Fav4 = ?, Fav5 = ?, Fav6 = ?, Fav7 = ?, Fav8 = ?, Fav9 = ? where UserID = ?',[$Username,$Email,$Password,$Fav1,$Fav2,$Fav3,$Fav4,$Fav5,$Fav6,$Fav7,$Fav8,$Fav9,$UserID]);
         // Return a response indicating success
         if($updateuser){
            return response()->json(['message' => 'User has been updated successfully']);
         } else {
            return response()->json(['message' => 'User has been updated successfully']);
         }
     }
     

    /**
     * Delete a user
     * does not delete any recipe or reviews by the user though - lets keep them
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

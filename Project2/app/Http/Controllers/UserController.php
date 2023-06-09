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
    
        /*
    change the following lines to once we add in hashing to the passwords on creation
    if ($user && password_verify($password, $user->password)) {
        return response()->json(['UserID' => $user->UserID]);
    } else {
        return response()->json(['error' => 'Invalid email or password'], 401);
    }
    */
    public function login(Request $request)
    {
        $Email = $request->input('Email');
        $Password = $request->input('Password');
    
        $user = DB::table('users')->where('email', $Email)->first();

        if ($user && $Password === $user->Password) {
            $_SESSION['UserID'] = $user->UserID;
            return response()->json(['success' => true, 'UserID' => $user->UserID]);
        } else {
            return response()->json(['success' => false, 'error' => 'Invalid email or password'], 401);
        }
    }

    public function findfav(Request $request)
{
    $UserID = $request->query('UserID');
    $result = DB::table('users')
        ->select('users.fav1 as fav1_id', 'r1.Title as fav1_title', 'r1.Description as fav1_description', 'users.fav2 as fav2_id', 'r2.Title as fav2_title', 'r2.Description as fav2_description', 'users.fav3 as fav3_id', 'r3.Title as fav3_title', 'r3.Description as fav3_description', 'users.fav4 as fav4_id', 'r4.Title as fav4_title', 'r4.Description as fav4_description', 'users.fav5 as fav5_id', 'r5.Title as fav5_title', 'r5.Description as fav5_description', 'users.fav6 as fav6_id', 'r6.Title as fav6_title', 'r6.Description as fav6_description', 'users.fav7 as fav7_id', 'r7.Title as fav7_title', 'r7.Description as fav7_description', 'users.fav8 as fav8_id', 'r8.Title as fav8_title', 'r8.Description as fav8_description', 'users.fav9 as fav9_id', 'r9.Title as fav9_title', 'r9.Description as fav9_description')
        ->leftJoin('recipes as r1', 'users.fav1', '=', 'r1.RecipeID')
        ->leftJoin('recipes as r2', 'users.fav2', '=', 'r2.RecipeID')
        ->leftJoin('recipes as r3', 'users.fav3', '=', 'r3.RecipeID')
        ->leftJoin('recipes as r4', 'users.fav4', '=', 'r4.RecipeID')
        ->leftJoin('recipes as r5', 'users.fav5', '=', 'r5.RecipeID')
        ->leftJoin('recipes as r6', 'users.fav6', '=', 'r6.RecipeID')
        ->leftJoin('recipes as r7', 'users.fav7', '=', 'r7.RecipeID')
        ->leftJoin('recipes as r8', 'users.fav8', '=', 'r8.RecipeID')
        ->leftJoin('recipes as r9', 'users.fav9', '=', 'r9.RecipeID')
        ->where('users.UserID', $UserID)
        ->get();

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

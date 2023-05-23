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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    
    public function find(Request $request)
    {
        
        $UserID = $request->query('UserID');
        $result = DB::table('users')->where('UserID', $UserID)->get();
        
        return $result;
        
    }

    public function create()
    {
        //SQL command for create
    }

    
    /**
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
}

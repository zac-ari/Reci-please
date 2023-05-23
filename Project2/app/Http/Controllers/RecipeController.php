<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Recipe::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Recipe::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    
    public function find(Request $request)
    {
        
        $RecipeID = $request->query('RecipeID');
        $result = DB::table('recipes')->where('RecipeID', $RecipeID)->get();
        
        return $result;
        
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class DummyDataBaseController extends Controller
{
    public function index(){
        return view('DummyDataBase',[]);
    }
}
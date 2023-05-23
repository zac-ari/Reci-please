<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __invoke(Request $request)
    {
        //dd($request->allFiles());
        $result=$request->file('file')->store('uploads');
        return ["Result:"=>$result];
    }
}

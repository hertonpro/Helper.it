<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(request $request){

        $path = $request->file('image')->store('upload');
        echo $path;

    }
}

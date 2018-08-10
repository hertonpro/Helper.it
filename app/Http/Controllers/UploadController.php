<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class UploadController extends Controller
{
    //Here we will upload the submitted software
    public function store(request $request){

        //Here we will upload the .exe of the the submitted software
        $path = $request->file('software')->store('upload');
        echo $path;


    //Here we will upload an icone of the the submitted software
        $path2 = $request->file('icone')->store('upload');
        echo $path2;
        
    }
    
    
}

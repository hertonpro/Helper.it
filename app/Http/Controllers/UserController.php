<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    //
    public function store(request $request){

        $path = $request->file('image')->store('upload');
        echo $path;
        $titre = $request->input('titre');
        $description = $request->input('description');
        $version = $request->input('version');
        $data=array('titre'=>$titre,"description"=>$description,"version"=>$version);
        DB::table('softwares')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}

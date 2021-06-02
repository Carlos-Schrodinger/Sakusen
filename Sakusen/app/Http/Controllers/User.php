<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function id(Request $request, $id){
        return $id;
    }
    //
}

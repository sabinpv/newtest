<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:posts|max:255',
            'email' => 'required|email',
        ]);

    }

  
}

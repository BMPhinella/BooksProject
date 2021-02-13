<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedController extends Controller
{
    public function getAuthenticatedUser(){
       // return auth()->user()->id;
        return 1;
    }
}

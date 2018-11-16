<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Mi_mundo extends Controller
{
     public function mostrar()
    {
        
         
        return view("Hmundo/mundo");
    }
}

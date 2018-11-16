<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Mi_laravel extends Controller
{
     public function mostrar()
    {
           
        return view("Hmundo/laravel");
    }
}

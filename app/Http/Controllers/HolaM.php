<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HolaM extends Controller
{
     public function mostrar()
    {
        
         
        return view("Hmundo/hola_Mundo");
    }
}

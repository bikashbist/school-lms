<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
     public function PreKindergarten()
    {
        return view('user.pages.levels.kindergarten');
    }
    public function Elementry()
    {
        return view('user.pages.levels.elementry');
    }
    public function Middle()
    {
        return view('user.pages.levels.middle');
    }
    
    
}

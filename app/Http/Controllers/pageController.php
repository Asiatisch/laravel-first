<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Stringable; 

class pageController extends Controller
{
    public function home()
    {
        return view('home');
    }
}

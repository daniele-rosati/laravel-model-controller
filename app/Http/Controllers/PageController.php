<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function idex()
    {
        return view ('index', ['movie' => Movie::all]);
    }
}
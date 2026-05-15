<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //GET
    public function index()
    {
        $name = "Gabriel";
        $habits = [
            'Run',
            'Read',
            'Code'
        ];
        return view('home', compact('name', 'habits'));
    }
}

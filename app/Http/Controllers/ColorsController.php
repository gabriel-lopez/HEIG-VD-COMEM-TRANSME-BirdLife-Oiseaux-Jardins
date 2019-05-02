<?php

namespace App\Http\Controllers;

use App\Color;

class ColorsController extends Controller
{
    public function index()
    {
        $colors = Color::all();

        return $colors;
    }
}
<?php

namespace App\Http\Controllers;

use App\Size;

class SizesController extends Controller
{
    public function index()
    {
        // $sizes = Size::all();

        $sizes = Size::has('birds')->get();

        return $sizes;
    }
}

<?php

namespace App\Http\Controllers;

use App\Family;

class FamiliesController extends Controller
{
    public function index()
    {
        // $families = Family::all();

        $families = Family::has('birds')->get();

        return $families;
    }
}

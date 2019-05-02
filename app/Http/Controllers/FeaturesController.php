<?php

namespace App\Http\Controllers;

use App\Feature;

class FeaturesController extends Controller
{
    public function index()
    {
        $features = Feature::all();

        return $features;
    }
}

<?php

namespace App\Http\Controllers;

use App\BeakShape;

class BeakShapesController extends Controller
{
    public function index()
    {
        $beakShapes = BeakShape::all();

        return $beakShapes;
    }
}

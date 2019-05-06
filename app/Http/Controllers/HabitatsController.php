<?php

namespace App\Http\Controllers;

use App\Habitat;

class HabitatsController extends Controller
{
    public function index()
    {
        $habitats = Habitat::has('birds')->get();

        return $habitats;
    }
}

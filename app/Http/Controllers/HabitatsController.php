<?php

namespace App\Http\Controllers;

use App\Habitat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HabitatsController extends Controller
{
    public function index()
    {
        $habitats = Habitat::all();

        return $habitats;
    }
}
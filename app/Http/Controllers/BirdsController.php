<?php

namespace App\Http\Controllers;

use App\Bird;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BirdsController extends Controller
{
    public function index()
    {
        $birds = Bird::paginate(16);

        return view('pages.birds')->with('birds', $birds);
    }

    public function show($id)
    {
        $bird = Bird::find($id);

        return view('pages.bird')->with('bird', $bird);
    }
}

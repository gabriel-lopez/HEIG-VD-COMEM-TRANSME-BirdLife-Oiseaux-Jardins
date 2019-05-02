<?php

namespace App\Http\Controllers;

use App\Bird;
use App\Http\Resources\Bird as BirdResource;
use Illuminate\Http\Request;

class BirdsController extends Controller
{
    public function index(Request $request)
    {
        $birds = Bird::filter($request)->with('pictures');

        return BirdResource::collection($birds->paginate(16));
    }

    public function show($id)
    {
        $bird = Bird::findOrFail($id)->with(['pictures', 'family', 'order', 'habitats', 'plumageColors', 'legsColors', 'beakColors', 'beakShapes', 'sizes'])->get()->find($id);

        return $bird;
    }
}

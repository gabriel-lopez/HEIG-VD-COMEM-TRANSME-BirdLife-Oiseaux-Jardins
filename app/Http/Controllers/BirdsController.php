<?php

namespace App\Http\Controllers;

use App\Bird;
use App\Http\Resources\Bird as BirdResource;
use Illuminate\Http\Request;
use test\Mockery\Stubs\Habitat;

class BirdsController extends Controller
{
    public function index()
    {
        $birds = Bird::paginate(16);

        return view('pages.birds')->with('birds', $birds);
    }

    public function show_api($id)
    {
        $bird = Bird::with('pictures')->get()->find($id);

        return $bird->toJson(JSON_PRETTY_PRINT);
    }

    public function api()
    {
        $birds = Bird::with('order', 'family', 'habitats', 'pictures')->paginate(16);

        return BirdResource::collection($birds);
    }

    public function search(Request $request, Bird $bird)
    {
        $bird = $bird->newQuery()->with('habitats', 'pictures');

        if ($request->has('orders')) {

        }

        if ($request->has('families')) {

        }

        if ($request->has('habitats')) {

        }

        return BirdResource::collection($bird->paginate(16));
    }


    public function show($id)
    {
        $bird = Bird::find($id);

        return view('pages.bird')->with('bird', $bird);
    }
}

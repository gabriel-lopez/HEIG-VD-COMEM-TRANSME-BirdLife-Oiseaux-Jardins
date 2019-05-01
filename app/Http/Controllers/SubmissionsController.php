<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function index()
    {
        $submissions = Submission::all();

        return $submissions;
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $validation = Submission::getValidation($inputs);

        if ($validation->fails())
        {
            return response()->json(['errors' => $validation->errors()], Response::HTTP_BAD_REQUEST);
        }

        return response()->json('ok', Response::HTTP_CREATED);
    }
}

<?php

namespace App\Http\Controllers;

use App\Submission;

class SubmissionsController extends Controller
{
    public function index()
    {
        $submissions = Submission::all();

        return $submissions;
    }
}

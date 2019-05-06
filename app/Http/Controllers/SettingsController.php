<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

class SettingsController extends Controller
{
    public function all()
    {
        $settings = [
            'settings' => setting('event')
        ];

        return response()->json($settings, Response::HTTP_OK);
    }
}

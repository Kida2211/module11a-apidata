<?php

namespace App\Http\Controllers;

class WeatherController extends Controller
{
    public function index()
    {
        // Read JSON directly from disk
        $json = file_get_contents(storage_path('app/weather.json'));
        $weatherData = json_decode($json, true);

        // Defensive check to prevent null in Blade
        if (!is_array($weatherData)) {
            $weatherData = [];  // Fallback to empty array
        }

        return view('weather.index', ['weather' => $weatherData]);
    }
}

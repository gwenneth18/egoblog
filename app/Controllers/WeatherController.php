<?php
namespace App\Controllers;

use App\Services\WeatherService;
use CodeIgniter\Controller;

class WeatherController extends Controller
{
    private $weatherService;

    public function __construct()
    {
        $this->weatherService = new WeatherService();
    }

    public function index()
    {
        return view('frontend/weather/search');
    }

    public function search()
    {
        // Get city and country from POST or GET
        $city = $this->request->getVar('city') ?? 'London';
        $country = $this->request->getVar('country') ?? '';

        // Fetch weather data
        $weatherData = $this->weatherService->getWeatherByCity($city, $country);

        if ($weatherData) {
            // Prepare data for view
            $data = [
                'weatherData' => $weatherData,
                'iconUrl' => $this->weatherService->getWeatherIconUrl($weatherData['icon'])
            ];

            // Render view with weather data
            return view('frontend/weather/search', $data);
        }

        // Handle error scenario
        return view('frontend/weather/search', [
            'error' => "Could not retrieve weather for {$city}"
        ]);
    }
}
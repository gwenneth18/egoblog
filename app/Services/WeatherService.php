<?php
// app/Services/WeatherService.php
namespace App\Services;

use CodeIgniter\HTTP\CURLRequest;
use Config\WeatherAPI;

class WeatherService
{
    private $apiKey;
    private $client;

    public function __construct()
    {
        $weatherConfig = new WeatherAPI();
        $this->apiKey = $weatherConfig->apiKey;
        $this->client = \Config\Services::curlrequest();
    }

    /**
     * Get weather information for a specific location
     * 
     * @param string $city City name
     * @param string $country Country code (optional)
     * @return array|null Weather data or null if request fails
     */
    public function getWeatherByCity(string $city, string $country = '')
    {
        try {
            // Construct the API URL
            $url = "http://api.openweathermap.org/data/2.5/weather?q=" . 
                   urlencode($city) . 
                   ($country ? ',' . urlencode($country) : '') . 
                   "&appid={$this->apiKey}&units=metric";

            // Make the API request
            $response = $this->client->get($url);

            // Check if the request was successful
            if ($response->getStatusCode() === 200) {
                // Parse the JSON response
                $weatherData = json_decode($response->getBody(), true);

                // Extract relevant information
                return [
                    'city' => $weatherData['name'],
                    'country' => $weatherData['sys']['country'],
                    'temperature' => round($weatherData['main']['temp'], 1),
                    'feels_like' => round($weatherData['main']['feels_like'], 1),
                    'description' => ucfirst($weatherData['weather'][0]['description']),
                    'icon' => $weatherData['weather'][0]['icon'],
                    'humidity' => $weatherData['main']['humidity'],
                    'wind_speed' => round($weatherData['wind']['speed'], 1)
                ];
            }

            // Log any errors
            log_message('error', 'Weather API request failed: ' . $response->getBody());
            return null;

        } catch (\Exception $e) {
            log_message('error', 'Weather API error: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get weather icon URL
     * 
     * @param string $iconCode Icon code from OpenWeatherMap
     * @return string Icon URL
     */
    public function getWeatherIconUrl(string $iconCode)
    {
        return "http://openweathermap.org/img/wn/{$iconCode}@2x.png";
    }
}
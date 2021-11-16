<?php


namespace App\Services;


use App\Contracts\WeatherComponentInterface;
use App\Http\Resources\WeatherResource;

class WeatherService
{

    protected $weather;

    /**
     * WeatherService constructor.
     */
    public function __construct(WeatherComponentInterface $weather)
    {
        $this->weather = $weather;
    }


    /**
     * @param string $city
     * @return WeatherResource
     */
    public function getWeatherByCity(string $city): WeatherResource
    {
        return new WeatherResource($this->weather->getWeather($city));
    }

}
<?php


namespace App\Components;


use App\Contracts\WeatherComponentInterface;
use Illuminate\Support\Facades\Http;

class WeatherComponent implements WeatherComponentInterface
{
    protected $url;

    public function __construct()
    {
        $this->url = config('weather.url');
    }

    /**
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function getWeather(string $city)
    {
        return Http::get($this->url . $city)->throw()->json();
    }

}
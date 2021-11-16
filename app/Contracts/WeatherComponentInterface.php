<?php

namespace App\Contracts;

interface WeatherComponentInterface
{
    public function getWeather(string $city);
}

<?php

namespace App\Http\Controllers\Api\v1\Weather;

use App\Http\Controllers\Controller;
use App\Services\WeatherService;

/**
 * Class KitchenController
 *
 */
class WeatherController extends Controller
{
    /** @var WeatherService $service */
    protected $service;

    public function __construct(WeatherService $service)
    {
        $this->service = $service;
    }
}

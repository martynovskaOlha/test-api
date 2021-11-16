<?php

namespace App\Http\Controllers\Api\v1\Weather;

use Exception;
use Illuminate\Http\JsonResponse;

/**
 * Class OrderController
 *
 */
class ShowController extends WeatherController
{

    /**
     * Returns weather for given city.
     *
     * @param string $city
     * @return \App\Http\Resources\WeatherResource|JsonResponse
     */
    public function __invoke(string $city)
    {
        try {
            $data = $this->service->getWeatherByCity($city);
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }
        return $data;
    }
}

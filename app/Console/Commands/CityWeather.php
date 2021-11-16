<?php


namespace App\Console\Commands;


use App\Services\WeatherService;
use Exception;
use Illuminate\Console\Command;

class CityWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:get {city}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get weather for given city';

    /** @var WeatherService $service */
    protected $service;

    /**
     * CityWeather constructor.
     */
    public function __construct(WeatherService $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    public function handle()
    {
        $city = $this->argument('city');

        try {
            $weather = $this->service->getWeatherByCity($city)->toJson();
            $this->line($weather);
        } catch (Exception $exception) {
            $this->line($exception->getMessage());
        }
    }
}
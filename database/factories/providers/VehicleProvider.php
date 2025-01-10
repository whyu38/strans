<?php

namespace Database\Factories\Providers;

use Faker\Provider\Base as BaseProvider;

class VehicleProvider extends BaseProvider
{
    protected static $vehicles = [
        'Hiace Premio', 'Hiace Commuter', 'All New Avanza', 'Avanza', 'Innova Reborn'
    ];

    public static function vehicle()
    {
        return static::randomElement(static::$vehicles);
    }
}

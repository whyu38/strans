<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\Providers\VehicleProvider;

class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new VehicleProvider($this->faker));

        return [
            'ndp' => $this->faker->unique()->randomNumber(8, true),
            'nama_lengkap' => $this->faker->name,
            'unit' => $this->faker->vehicle,
            'alamat' => $this->faker->address,
        ];
    }
}
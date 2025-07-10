<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingFactory extends Factory
{
    protected $model = Building::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company . ' Building',
            'address' => $this->faker->address,
            'description' => $this->faker->sentence,
        ];
    }
}
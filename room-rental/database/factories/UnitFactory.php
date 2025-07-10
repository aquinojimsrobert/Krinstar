<?php

namespace Database\Factories;

use App\Models\Unit;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
{
    protected $model = Unit::class;

    public function definition(): array
    {
        return [
            'building_id' => Building::factory(),
            'unit_number' => $this->faker->unique()->numberBetween(100, 999),
            'floor' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->sentence(),
            'monthly_rent' => $this->faker->numberBetween(5000, 15000),
            'is_occupied' => false,
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\Rental;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    protected $model = Rental::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'unit_id' => Unit::factory(),
            'start_date' => $this->faker->date(),
            'end_date' => null,
        ];
    }
}
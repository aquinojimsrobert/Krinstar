<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    protected $model = Report::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'unit_id' => Unit::factory(),
            'message' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Pending', 'Resolved']),
        ];
    }
}
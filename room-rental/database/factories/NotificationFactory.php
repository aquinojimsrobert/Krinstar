<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'message' => $this->faker->sentence,
            'type' => $this->faker->randomElement(['Billing', 'Report', 'General']),
            'status' => $this->faker->randomElement(['Read', 'Unread']),
        ];
    }
}
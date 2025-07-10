<?php

namespace Database\Factories;

use App\Models\AdminAction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminActionFactory extends Factory
{
    protected $model = AdminAction::class;

   public function definition(): array
{
    return [
        'user_id' => User::factory(), // Must match the foreign key in the table
        'action_type' => $this->faker->randomElement(['Created', 'Updated', 'Deleted']),
        'description' => $this->faker->sentence,
    ];
}

}
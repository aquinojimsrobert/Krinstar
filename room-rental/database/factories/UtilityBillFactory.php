<?php

namespace Database\Factories;

use App\Models\UtilityBill;
use App\Models\Rental;
use Illuminate\Database\Eloquent\Factories\Factory;

class UtilityBillFactory extends Factory
{
    protected $model = UtilityBill::class;

    public function definition(): array
    {
        return [
            'rental_id' => Rental::factory(),
            'bill_type' => $this->faker->randomElement(['Electricity', 'Water']),
            'amount' => $this->faker->randomFloat(2, 200, 5000),
            'due_date' => $this->faker->date(),
            'is_paid' => $this->faker->boolean(50),
        ];
    }
}
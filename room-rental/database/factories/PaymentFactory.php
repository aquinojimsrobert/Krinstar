<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Payment;
use App\Models\Rental;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'rental_id' => Rental::factory(),
            'amount' => $this->faker->randomFloat(2, 500, 5000),
            'payment_date' => $this->faker->date(),
            'method' => $this->faker->randomElement(['Cash', 'Online', 'Bank Transfer']),
            'reference_number' => $this->faker->unique()->bothify('REF###??'),
        ];
    }
}
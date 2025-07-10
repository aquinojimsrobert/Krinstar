<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Building;
use App\Models\Rental;
use App\Models\Unit;
use App\Models\UtilityBill;
use App\Models\Report;
use App\Models\Payment;
use App\Models\AdminAction;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 Admin/Renter Users
        User::factory(5)->create(); 

        // Create Buildings with Units
        $buildings = Building::factory(3)
            ->hasUnits(5)
            ->create();

        // Create 10 Renter Users and assign each to a random Unit
        User::factory(10)->state(['role' => 'Renter'])->create()->each(function ($user) {
            // Get a random unoccupied unit
            $unit = Unit::where('is_occupied', false)->inRandomOrder()->first();

            if ($unit) {
                $unit->is_occupied = true;
                $unit->save();

                $rental = Rental::factory()->create([
                    'user_id' => $user->id,
                    'unit_id' => $unit->id,
                ]);

                // Utility bills for rental
                UtilityBill::factory(3)->create(['rental_id' => $rental->id]);

                // Payments for rental
                Payment::factory(2)->create(['rental_id' => $rental->id]);

                // Reports for this user and unit
                Report::factory(3)->create([
                    'user_id' => $user->id,
                    'unit_id' => $unit->id,
                ]);
            }
        });

        // Admin actions
        AdminAction::factory(5)->create();
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->constrained('buildings')->onDelete('cascade');
            $table->string('unit_number');
            $table->integer('floor');
            $table->text('description')->nullable();
            $table->decimal('monthly_rent', 10, 2);
            $table->boolean('is_occupied')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('units');
    }
};
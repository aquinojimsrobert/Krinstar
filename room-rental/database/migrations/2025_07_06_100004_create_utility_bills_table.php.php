<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   public function up(): void
{
    Schema::create('utility_bills', function (Blueprint $table) {
        $table->id();
        $table->foreignId('rental_id')->constrained()->onDelete('cascade');
        $table->enum('bill_type', ['Water', 'Electricity']);
        $table->decimal('amount', 10, 2);
        $table->date('due_date');
        $table->boolean('is_paid')->default(false);
        $table->timestamps();
    });
}

    public function down(): void {
        Schema::dropIfExists('utility_bills');
    }
};
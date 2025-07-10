<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('payments', function (Blueprint $table) {
    $table->id();
    $table->foreignId('rental_id')->constrained('rentals')->onDelete('cascade');
    $table->decimal('amount', 10, 2);
    $table->date('payment_date');
    $table->string('method'); // <- This is what's missing
    $table->string('reference_number');
    $table->timestamps();
});
    }

    public function down(): void {
        Schema::dropIfExists('payments');
    }
};
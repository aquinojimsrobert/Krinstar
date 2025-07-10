<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->text('message');
            $table->enum('status', ['Pending', 'Resolved'])->default('Pending');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('reports');
    }
};
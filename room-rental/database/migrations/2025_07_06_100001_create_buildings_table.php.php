<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
{
    Schema::create('buildings', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('address');
        $table->text('description')->nullable(); // ← Add this line
        $table->timestamps();
    });
}

    public function down(): void {
        Schema::dropIfExists('buildings');
    }
};

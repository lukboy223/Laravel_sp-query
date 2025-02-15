<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hall_facility', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hall_id')->constrained()->onDelete('cascade');
            $table->foreignId('facility_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hall_facility');
    }
};

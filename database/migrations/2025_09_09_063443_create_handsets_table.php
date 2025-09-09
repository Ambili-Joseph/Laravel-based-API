<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('handsets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->decimal('price', 8, 2);
            $table->date('release_date')->nullable();
            $table->json('features')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handsets');
    }
};

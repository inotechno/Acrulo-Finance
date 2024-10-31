<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations to create the currency_codes table.
     *
     * This table will store information about currency codes,
     * including their symbols, names, and associated countries.
     *
     * @return void
     */
    public function up(): void
    {
        // Create the currency_codes table
        Schema::create('currency_codes', function (Blueprint $table) {
            $table->id(); // Primary key

            // Currency code (e.g., USD, EUR)
            $table->string('currency_code');

            // Currency symbol (e.g., $, €)
            $table->string('currency_symbol');

            // Currency name (e.g., Dollar, Euro)
            $table->string('currency_name');

            // Country name associated with the currency (e.g., United States, Eurozone)
            $table->string('country');

            // Timestamps for created_at and updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currency_codes');
    }
};

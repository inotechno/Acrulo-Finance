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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name')->index();
            $table->string('slug')->index();
            $table->string('description')->nullable()->index();
            $table->double('initial_balance')->default(0);
            $table->foreignId('account_type_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('currency_code_id')->constrained('users_currencies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('color')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};

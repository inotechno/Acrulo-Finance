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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id')->constrained('users_categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('payment_type_id')->constrained('payment_types')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('transfer_id')->nullable()->constrained()->nullOnDelete()->cascadeOnUpdate();
            $table->string('payee')->index();
            $table->double('amount');
            $table->enum('transaction_type', ['income', 'expense', 'transfer']);
            $table->dateTime('datetime');
            $table->text('note')->nullable();
            $table->string('place')->nullable();
            $table->integer('warranty_number')->nullable();
            $table->string('attachment')->nullable();
            $table->enum('status', ['Cleared', 'Reconciled', 'Uncleared'])->default('Cleared');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};

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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', '50');
            $table->string('email', '100')->unique();
            $table->integer('phone')->nullable()->unique();
            $table->string('password');
            $table->string('image')->nullable();
            $table->text('bio')->nullable();
            $table->rememberToken();
            $table->timestamp('verification_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

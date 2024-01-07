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
        Schema::create('transation_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default('1');
            $table->string('message');
            $table->string('uid')->nullable();
            $table->string('zid')->nullable();
            $table->string('pid')->nullable();
            $table->string('coin_amount')->nullable();
            $table->string('coin_balance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transation_histories');
    }
};

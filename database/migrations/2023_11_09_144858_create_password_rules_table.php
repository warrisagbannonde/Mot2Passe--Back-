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
        Schema::create('password_rules', function (Blueprint $table) {
            $table->uuid('password_rule_id')->primary();
            $table->string('password_rule_name')->unique();
            $table->text('password_rule_description')->nullable();
            $table->integer('password_rule_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_rules');
    }
};

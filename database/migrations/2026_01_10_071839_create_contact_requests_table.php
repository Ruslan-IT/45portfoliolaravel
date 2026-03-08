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
        Schema::create('contact_requests', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->string('phone')->nullable();

            $table->string('site')->nullable(); // имя сайта
            $table->text('message');

            $table->string('ip_address', 45)->nullable(); // IPv4 / IPv6
            $table->string('region')->nullable(); // на будущее

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_requests');
    }
};

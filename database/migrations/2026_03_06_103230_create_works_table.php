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
        Schema::create('works', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('overview')->nullable();

            $table->string('category')->nullable();
            $table->string('awards')->nullable();
            $table->string('client')->nullable();
            $table->string('year')->nullable();

            $table->json('objectives')->nullable();
            $table->json('gallery')->nullable();

            $table->text('testimonial_text')->nullable();
            $table->string('testimonial_author')->nullable();

            // SEO
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};

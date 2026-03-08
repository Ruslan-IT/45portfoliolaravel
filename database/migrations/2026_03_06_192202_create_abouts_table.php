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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Заголовок в верхней части
            $table->text('description')->nullable(); // Основной текст с абзацами
            $table->text('skills')->nullable(); // JSON массив навыков дизайна
            $table->text('coding_skills')->nullable(); // JSON массив кодинг-навыков
            $table->text('experiences')->nullable(); // JSON массив опыта
            $table->text('education')->nullable(); // JSON массив образования
            $table->text('testimonials')->nullable(); // JSON массив отзывов
            $table->integer('hours_of_works')->nullable();
            $table->integer('projects_done')->nullable();
            $table->integer('satisfied_customers')->nullable();
            $table->integer('awards_winning')->nullable();

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

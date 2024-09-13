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
        Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('info');
        $table->text('dop_info')->nullable();
        $table->string('image'); // Ссылка на изображение
        $table->decimal('price', 8, 2); // Стоимость, 8 цифр, 2 из которых после запятой
        $table->text('svg_image')->nullable(); // Добавляем поле для хранения SVG-кода
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

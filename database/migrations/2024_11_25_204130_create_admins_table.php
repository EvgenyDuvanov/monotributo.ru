<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id(); // ID администратора
            $table->string('name'); // Имя администратора
            $table->string('email')->unique(); // Уникальный email
            $table->string('password'); // Пароль
            $table->rememberToken(); // Токен для "запомнить меня"
            $table->timestamps(); // created_at и updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
};

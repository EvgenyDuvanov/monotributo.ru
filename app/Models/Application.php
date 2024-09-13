<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    // Указываем таблицу, если она не совпадает с названием модели
    protected $table = 'applications';

    // Указываем заполняемые поля
    protected $fillable = ['name', 'email', 'phone', 'status', 'comment'];

    // Можно добавить константы для статусов
    const STATUS_NEW = 'new';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_CLOSED = 'closed';

    // Определение статусов как массива
    public static function getStatuses()
    {
        return [
            self::STATUS_NEW => 'Новый',
            self::STATUS_IN_PROGRESS => 'В процессе',
            self::STATUS_CLOSED => 'Закрыт',
        ];
    }
    
}

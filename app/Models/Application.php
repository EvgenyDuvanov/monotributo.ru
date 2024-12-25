<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = ['name', 'email', 'phone', 'status', 'comment'];

    const STATUS_NEW = 'new';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_CLOSED = 'closed';

    public static function getStatuses()
    {
        return [
            self::STATUS_NEW => ['label' => 'Новая', 'class' => 'badge bg-success'],
            self::STATUS_IN_PROGRESS => ['label' => 'В процессе', 'class' => 'badge bg-warning'],
            self::STATUS_CLOSED => ['label' => 'Закрыта', 'class' => 'badge bg-danger'],
        ];
    }
}

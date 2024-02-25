<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guests', 'event', 'feedback'];

    /**
     * Валидация
     *
     * @return array
     */
    public static function validationRules(): array
    {
        return [
            'id' => 'sometimes',
            'name' => 'required|string|max:255',
            'guests' => 'required|integer|min:1',
            'event' => 'required|string|max:255',
            'feedback' => 'nullable|string|max:500',
        ];
    }
}

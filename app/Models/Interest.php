<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
    ];

    public static function rule()
    {
        return [
            'name' => 'required',
            'user_id' => 'exists:users,id',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}

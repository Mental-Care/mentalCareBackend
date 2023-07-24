<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Res extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public static function rule()
    {
        return [
            'name' => 'required',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}

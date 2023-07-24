<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'place',
        'fromDate',
        'toDate',
    ];

    public static function rule()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'title' => 'required',
            'place' => 'required',
            'fromDate' => 'required',
            'toDate' => 'required',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'therapist_id',
        'rate',
        'text',
        'date',
    ];

    public static function rule()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'therapist_id' => 'required|exists:therapists,id',
            'rate' => 'required',
            'text' => 'required',
            'date' => 'required',
        ];
    }

    public function specialty()
    {
        return $this->belongsTo(Specialties::class)->withDefault();
    }
}

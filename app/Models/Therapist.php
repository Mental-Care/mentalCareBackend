<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialty_id',
        'subSpecialty_id',
        'interests_id',
        'language',
        'country',
        'address',
        'sessions',
        'rate',
        'review',
        'communicationSkills',
        'effectiveSolutions',
        'understandSituation',
        'CommitmentSessionDates',
        'date',
        'time',
        'price_60',
        'price_30',
        'isPsychotherapy',
        'Connected',
        'isBestTherapist',
        'image',
    ];

    public static function rule()
    {
        return [
            'specialty_id' => 'nullable',
            'subSpecialty_id' => 'nullable',
            'interests_id' => 'nullable',
            'language' => 'nullable',
            'country' => 'nullable',
            'address' => 'nullable',
            'sessions' => 'nullable',
            'rate' => 'nullable',
            'review' => 'nullable',
            'communicationSkills' => 'nullable',
            'effectiveSolutions' => 'nullable',
            'understandSituation' => 'nullable',
            'CommitmentSessionDates' => 'nullable',
            'date' => 'nullable',
            'time' => 'nullable',
            'price_60' => 'nullable',
            'price_30' => 'nullable',
            'isPsychotherapy' => 'nullable',
            'Connected' => 'nullable',
            'isBestTherapist' => 'nullable',
            'image' => 'nullable',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}

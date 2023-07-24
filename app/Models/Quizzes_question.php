<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizzes_question extends Model
{
    use HasFactory;

    protected $fillable = [
        'quizze_id',
        'opt1',
        'opt2',
        'opt3',
        'opt4',
        'ans',
    ];

    public static function rule()
    {
        return [
            'quizze_id' => 'required|exists:quizzes,id',
            'opt1' => 'required',
            'opt2' => 'required',
            'opt3' => 'required',
            'opt4' => 'required',
            'ans' => 'required',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Res_questions extends Model
{
    use HasFactory;

    protected $fillable = [
        'res_id',
        'question',
        'opt1',
        'opt2',
        'opt3',
    ];

    public static function rule()
    {
        return [
            'res_id' => 'required',
            'question' => 'required',
            'opt1' => 'required',
            'opt2' => 'required',
            'opt3' => 'required',
        ];
    }

    public function res()
    {
        return $this->belongsTo(Res::class)->withDefault();
    }
}

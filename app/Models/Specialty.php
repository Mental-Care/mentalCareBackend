<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
    ];

    public static function rule()
    {
        return [
            'name' => 'required',
            'parent_id' => 'nullable|exists:specialties,id',
        ];
    }

    public function specialty()
    {
        return $this->belongsTo(Specialties::class)->withDefault();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'categoryBlogs_id',
        'subCategoryBlogs_id',
        'description',
        'cover',
    ];

    public static function rule()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'title' => 'required',
            'categoryBlogs_id' => 'required',
            'subCategoryBlogs_id' => 'required',
            'description' => 'required',
            'cover' => 'required',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function categoryblog()
    {
        return $this->belongsTo(Category_blogs::class)->withDefault();
    }
}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    use HasFactory;

    protected $table = 'category_blogs';

    protected $fillable = [
        'category',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}

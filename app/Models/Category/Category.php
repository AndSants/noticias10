<?php

namespace App\Models\Category;

use App\Models\News\News;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Category $category) {
            $category->slug = str()->slug($category->name);
        });
    }
}

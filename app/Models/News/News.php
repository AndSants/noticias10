<?php

namespace App\Models\News;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'content',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

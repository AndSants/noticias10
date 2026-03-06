<?php

namespace App\Repositories\News;

use App\Models\News\News;

class NewsRepository
{
    public function create(array $data)
    {
        return News::create($data);
    }

    public function search($title = null, $category = null)
    {
        return News::with('category')
            ->when($title, fn ($q) =>
                $q->where('title', 'like', "%{$title}%")
            )
            ->when($category, fn ($q) =>
                $q->where('category_id', $category)
            )
            ->latest()
            ->paginate(10);
    }
}
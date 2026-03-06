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
        $query = News::query()->with('category');

            if ($title) {
                $query->where('title', 'LIKE', "%{$title}%");
            }

            if ($category) {
                $query->where('category_id', $category);
            }
        
        return $query->latest()
            ->paginate(12)
            ->withQueryString();
    }

    public function findById(int $id)
    {
        return News::with('category')->findOrFail($id);
    }
}
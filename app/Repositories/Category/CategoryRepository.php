<?php

namespace App\Repositories\Category;

use App\Models\Category\Category;

class CategoryRepository
{
    public function create(array $data)
    {
        return Category::create($data);
    }

    public function all()
    {
        return Category::orderBy('name')->get();
    }
}
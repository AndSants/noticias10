<?php

namespace App\Repositories\Category;

use App\Models\Category\Category;

class CategoryRepository
{
    public function paginate()
    {
        return Category::query()
            ->orderBy('name')
            ->latest()
            ->paginate(10);
    }

    public function all()
    {
        return Category::query()
            ->orderBy('name')
            ->get();
    }

    public function find(int $id)
    {
        return Category::findOrFail($id);
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update(int $id, array $data)
    {
        $category = $this->find($id);
        $category->update($data);

        return $category;
    }

    public function delete(int $id)
    {
        $category = $this->find($id);
        return $category->delete();
    }
}
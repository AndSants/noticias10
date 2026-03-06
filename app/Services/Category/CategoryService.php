<?php

namespace App\Services\Category;

use App\Repositories\Category\CategoryRepository;

class CategoryService
{
    public function __construct(
        protected CategoryRepository $repository
    ) {}

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function list()
    {
        return $this->repository->all();
    }
}
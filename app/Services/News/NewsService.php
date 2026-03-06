<?php

namespace App\Services\News;

use App\Repositories\News\NewsRepository;

class NewsService
{
    public function __construct(
        protected NewsRepository $repository
    ) {}

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function search(?string $title, ?int $category)
    {
        return $this->repository->search($title, $category);
    }
}
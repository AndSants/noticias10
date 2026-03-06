<?php

namespace App\Services\Category;

use App\Repositories\Category\CategoryRepository;

class CategoryService
{
    public function __construct(
        protected CategoryRepository $repository
    ) {}

    public function list()
    {
        return $this->repository->paginate();
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete(int $id)
    {
        $category = $this->repository->find($id);

        if ($category->news()->exists()) {
            throw new \DomainException(
                'Não é possível excluir esta categoria pois existem notícias vinculadas.'
            );
        }

        return $this->repository->delete($id);
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }
}
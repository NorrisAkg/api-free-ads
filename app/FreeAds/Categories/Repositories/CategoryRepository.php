<?php

namespace App\FreeAds\Categories\Repositories;

use App\FreeAds\Categories\Category;
use App\FreeAds\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Collection as Support;

class CategoryRepository implements CategoryRepositoryInterface
{

    /** @var Category */
    protected $model;
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function getAll(): Support
    {
        return $this->model->all();
    }

    public function create(array $body): Category
    {
        $category = $this->model->create($body);

        return $category;
    }

    public function findOne(int $id): Category
    {
        $category = $this->model->findOrFail($id);

        return $category;
    }

    public function update(Category $category, array $body): Category
    {
        $category->update($body);

        return $category;
    }

    public function delete(Category $category): bool
    {
        return $category->delete();
    }
}

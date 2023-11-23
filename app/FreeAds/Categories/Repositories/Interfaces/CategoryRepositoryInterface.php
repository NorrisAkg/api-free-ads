<?php

namespace App\FreeAds\Categories\Repositories\Interfaces;

use App\FreeAds\Categories\Category;
use Illuminate\Support\Collection as Support;

interface CategoryRepositoryInterface {
    /**
     * Get all categories
     *
     * @return Support
     */
    public function getAll(): Support;

    /**
     * Create new category using given body
     *
     * @param array $body
     * @return Category
     */
    public function create(array $body): Category;

    /**
     * Find one category according to given id
     *
     * @param integer $id
     * @return Category
     */
    public function findOne(int $id): Category;

    /**
     * Update given category using given body data
     *
     * @param Category $category
     * @param array $body
     * @return Category
     */
    public function update(Category $category, array $body): Category;

    /**
     * Delete given category
     *
     * @param Category $category
     * @return boolean
     */
    public function delete(Category $category): bool;
}

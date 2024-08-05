<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    protected $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    public function getCategories()
    {
        return $this->categoryModel->pluck('name', 'id')->toArray();
    }

    public function getCategoryByName($name)
    {
        return $this->categoryModel->where('name', $name)->first();
    }

    public function insertCategory($name)
    {
        return $this->categoryModel->insertGetID(['name' => $name]);
    }
}

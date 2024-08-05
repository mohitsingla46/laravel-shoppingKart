<?php

namespace App\Services;

use App\Repositories\CategoryOrderRepository;
use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;
    protected $categoryOrderRepository;

    public function __construct(CategoryRepository $categoryRepository, CategoryOrderRepository $categoryOrderRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->categoryOrderRepository = $categoryOrderRepository;
    }

    public function insertOrUpdate($category)
    {
        $categoryExist = $this->categoryRepository->getCategoryByName($category);

        if ($categoryExist) {
            $category_id = $categoryExist->id;
        } else {
            $category_id = $this->categoryRepository->insertCategory($category);
        }

        $order = $this->categoryOrderRepository->getMaxOrder();

        $this->categoryOrderRepository->create([
            'category_id' => $category_id,
            'order' => $order + 1
        ]);
    }

    public function getCategories()
    {
        return $this->categoryRepository->getCategories();
    }
}

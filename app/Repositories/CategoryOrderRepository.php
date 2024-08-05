<?php

namespace App\Repositories;

use App\Models\CategoryOrder;

class CategoryOrderRepository
{
    protected $categoryOrder;

    public function __construct(CategoryOrder $categoryOrder)
    {
        $this->categoryOrder = $categoryOrder;
    }

    public function create($data)
    {
        return $this->categoryOrder->create($data);
    }

    public function getMaxOrder()
    {
        return $this->categoryOrder->max('order');
    }

    public function truncate()
    {
        return $this->categoryOrder->truncate();
    }
}

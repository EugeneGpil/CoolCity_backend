<?php

declare(strict_types = 1);

namespace App\Services\Products\Repositories;

use App\Models\Product;
use Illuminate\Support\Collection;

class EloquentProductsRepository implements ProductsRepositoryInterface
{
    /**
     * Get new products object
     * 
     * @return Product
     */
    public function model(): Product
    {
        return new Product();
    }

    /**
     * Get all ids
     * 
     * @return array
     */
    public function getAllIds(): Collection
    {
        return $this->model()
            ->newQuery()
            ->where('id', '>', 0)
            ->pluck('id');
    }

    /**
     * Get first existing id
     * 
     * @return int
     */
    public function getFirstExistingId(): int
    {
        return $this->model()
            ->newQuery()
            ->where('id', '>', 0)
            ->pluck('id')
            ->first();
    }
}

<?php

declare(strict_types = 1);

namespace App\Services\Products\Repositories;

use Illuminate\Support\Collection;

interface ProductsRepositoryInterface
{
    /**
     * Get all ids
     * 
     * @return Collection
     */
    public function getAllIds(): Collection;
}
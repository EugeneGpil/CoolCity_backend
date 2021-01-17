<?php

declare(strict_types = 1);

namespace App\Services\Positions\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;

interface PositionsRepositoryInterface
{
    /**
     * Get all positions
     * 
     * @return Collection
     */
    public function all(): Collection;

    /**
     * Get one position in collection by id
     * 
     * @param int $id
     * @return Collection
     */
    public function find(int $id): Collection;

    /**
     * Get positions by product id
     * 
     * @param int $id
     * @return Collection
     */
    public function getByProduct(int $id): Collection;

    /**
     * Get all existing ids
     * 
     * @return SupportCollection
     */
    public function getAllIds(): SupportCollection;

    /**
     * Get first existing product id
     * 
     * @return int
     */
    public function getFirstExistingId(): int;
}

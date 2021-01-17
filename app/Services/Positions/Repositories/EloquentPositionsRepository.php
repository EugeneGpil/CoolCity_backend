<?php

declare(strict_types = 1);

namespace App\Services\Positions\Repositories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;

class EloquentPositionsRepository implements PositionsRepositoryInterface
{
    /**
     * Create new Position object
     * 
     * @return Position
     */
    private function model(): Position
    {
        return new Position();
    }

    /**
     * Get all positions
     * 
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model()
            ->all();
    }

    /**
     * Get one position in collection by id
     * 
     * @param int $id
     * @return Collection
     */
    public function find(int $id): Collection
    {
        return $this->model()
            ->newQuery()
            ->where('id', $id)
            ->get();
    }

    /**
     * Get positions by product id
     * 
     * @param int $id
     * @return Collection
     */
    public function getByProduct(int $id): Collection
    {
        return $this->model()
            ->newQuery()
            ->where('product_id', $id)
            ->get();
    }

    /**
     * Get all existing ids
     * 
     * @return SupportCollection
     */
    public function getAllIds(): SupportCollection
    {
        return $this->model()
            ->newQuery()
            ->where('id', '>', 0)
            ->pluck('id');
    }

    /**
     * Get first existing product id
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

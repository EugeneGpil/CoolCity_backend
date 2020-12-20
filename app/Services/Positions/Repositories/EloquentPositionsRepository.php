<?php

declare(strict_types = 1);

namespace App\Services\Positions\Repositories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Collection;

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
}
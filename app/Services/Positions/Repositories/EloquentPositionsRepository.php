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
     * Get all with relations
     * 
     * @param array $relations
     * @return Collection
     */
    public function allWith(array $relations): Collection
    {
        $positions = $this->model()
            ->all();

        foreach ($relations as $relation) {
            $positions->load($relation);
        }

        return $positions;
    }
}
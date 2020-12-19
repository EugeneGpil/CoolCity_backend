<?php

declare(strict_types = 1);

namespace App\Services\Positions\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface PositionsRepositoryInterface
{
    /**
     * Get all positions
     * 
     * @return Collection
     */
    public function all(): Collection;

    /**
     * Get all with relations
     * 
     * @param array $relations
     * @return Collection
     */
    public function allWith(array $relations): Collection;
}
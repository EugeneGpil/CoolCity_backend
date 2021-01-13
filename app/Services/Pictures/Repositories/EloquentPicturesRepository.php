<?php

declare(strict_types = 1);

namespace App\Services\Pictures\Repositories;

use App\Models\Picture;

class EloquentPicturesRepository
{
    /**
     * Return picture object
     * 
     * @return Picture
     */
    private function model(): Picture
    {
        return new Picture();
    }

    /**
     * Get first existing picutre
     * 
     * @return Picture
     */
    public function getFirstExistingPicture(): Picture
    {
        return $this->model()
            ->newQuery()
            ->first();
    }
}

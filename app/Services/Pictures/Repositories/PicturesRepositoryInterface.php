<?php

declare(strict_types = 1);

namespace App\Services\Pictures\Repositories;

use App\Models\Picture;

interface PicturesRepositoryInterface
{
    /**
     * Get first existing image
     * 
     * @return Picture
     */
    public function getFirstExistingPicture(): Picture;
}

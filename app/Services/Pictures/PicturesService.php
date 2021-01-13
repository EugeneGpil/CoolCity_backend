<?php

declare(strict_types = 1);

namespace App\Services\Pictures;

use App\Services\Pictures\Repositories\EloquentPicturesRepository;

class PicturesService
{
    /**
     * Pictures repository
     * 
     * @var EloquentPicturesRepository $picturesRepository
     */
    private $picturesRepository;

    /**
     * Constructor
     */
    public function __construct(
        EloquentPicturesRepository $picturesRepository
    ) {
        $this->picturesRepository = $picturesRepository;
    }

    /**
     * Get first existing image
     * 
     * @return array
     */
    public function getFirstExistingPictureUrl(): array
    {
        return [
            'status' => true,
            'payload' => $this->picturesRepository
                ->getFirstExistingPicture()
                ->url,
        ];
    }
}

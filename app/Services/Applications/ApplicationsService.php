<?php

declare(strict_types = 1);

namespace App\Services\Applications;

use App\Services\Applications\Repositories\ApplicationsRepositoryInterface;

class ApplicationsService
{
    /**
     * applications repository
     * 
     * @var ApplicationsRepositoryInterface
     */
    private $applicationsRepositoryInterface;

    /**
     * constructor
     * 
     * @param ApplicationsRepositoryInterface $applicationsRepositoryInterface
     * @return void
     */
    public function __construct(
        ApplicationsRepositoryInterface $applicationsRepositoryInterface
    )
    {
        $this->applicationsRepositoryInterface = $applicationsRepositoryInterface;
    }

    /**
     * Create application
     * 
     * @param array $applicationData
     * @return array
     */
    public function create(array $applicationData): array
    {
        return [
            'status' => true,
            'payload' =>  $this->applicationsRepositoryInterface
                ->create($applicationData)
        ];
    }
}

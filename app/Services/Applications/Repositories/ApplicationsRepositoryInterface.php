<?php

declare (strict_types = 1);

namespace App\Services\Applications\Repositories;

use App\Models\Application;

interface ApplicationsRepositoryInterface
{
    /**
     * Create application
     * 
     * @param array $applicationData
     * @return Application
     */
    public function create(array $applicationData): Application;

    /**
     * Delete application
     * 
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;
}

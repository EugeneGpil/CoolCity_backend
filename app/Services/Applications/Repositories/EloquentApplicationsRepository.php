<?php

declare(strict_types = 1);

namespace App\Services\Applications\Repositories;

use App\Models\Application;

class EloquentApplicationsRepository implements ApplicationsRepositoryInterface
{
    /**
     * Create new application object
     * 
     * @return Application
     */
    public function model(): Application
    {
        return new Application();
    }

    /**
     * Create application
     * 
     * @param array $applicationData
     * @return Application
     */
    public function create(array $applicationData): Application
    {
        $application = $this->model();
        $application->position_id = $applicationData['position_id'] ?? null;
        $application->name = $applicationData['name'] ?? null;
        $application->phone = $applicationData['phone'] ?? null;
        $application->postcode = $applicationData['postcode'] ?? null;
        $application->address = $applicationData['address'] ?? null;
        $application->email = $applicationData['email'] ?? null;
        $application->facebook = $applicationData['facebook'] ?? null;
        $application->line = $applicationData['line'] ?? null;
        $application->whatsapp = $applicationData['whatsapp'] ?? null;
        $application->telegram = $applicationData['telegram'] ?? null;
        $application->vk = $applicationData['vk'] ?? null;
        $application->save();
        return $application;
    }

    /**
     * Delete application
     * 
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $this->model()
            ->newQuery()
            ->find($id)
            ->delete();
    }
}

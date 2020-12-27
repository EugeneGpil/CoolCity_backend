<?php

declare(strict_types = 1);

namespace App\Providers;

use App\Services\Applications\Repositories\ApplicationsRepositoryInterface;
use App\Services\Applications\Repositories\EloquentApplicationsRepository;
use App\Services\Positions\Repositories\EloquentPositionsRepository;
use App\Services\Positions\Repositories\PositionsRepositoryInterface;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class RepositoryInterfaceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PositionsRepositoryInterface::class, function() {
            return new EloquentPositionsRepository();
        });

        $this->app->bind(ApplicationsRepositoryInterface::class, function() {
            return new EloquentApplicationsRepository();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
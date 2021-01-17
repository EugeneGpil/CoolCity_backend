<?php

declare(strict_types = 1);

namespace Tests\Feature\Base;

use App\Services\Applications\Repositories\EloquentApplicationsRepository;
use App\Services\Positions\Repositories\EloquentPositionsRepository;
use App\Services\Products\Repositories\EloquentProductsRepository;
use Tests\TestCase;

class BaseTestCase extends TestCase
{
    /**
     * Positions repository
     * 
     * @var EloquentPositionsRepository
     */
    protected $positionsRepository;

    /**
     * Products repository
     * 
     * @var EloquentProductsRepository
     */
    protected $productsRepository;

    /**
     * Application repository
     * 
     * @var EloquentApplicationRepository
     */
    protected $applicationRepository;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->positionsRepository = new EloquentPositionsRepository();
        $this->productsRepository = new EloquentProductsRepository();
        $this->applicationRepository = new EloquentApplicationsRepository();
    }

    /**
     * Just useless test for no warning
     * 
     * @return void
     */
    public function testUseless(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

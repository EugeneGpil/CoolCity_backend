<?php

declare(strict_types = 1);

namespace Tests\Feature\Positions;

use App\Services\Positions\Repositories\PositionsRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Base\BaseTestCase;

class GetPositionsByProductRequestTest extends BaseTestCase
{
    /**
     * Test get positions of not existing product
     *
     * @return void
     */
    public function testGetPositionsOfNotExistingProduct(): void
    {
        $response = $this->getJson('/api/product/0/positions');

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['id']);
    }

    /**
     * Test get positions of existing product
     * 
     * @return void
     */
    public function testGetPositionsOfExistingProduct(): void
    {
        $firstProductId = $this->productsRepository
            ->getFirstExistingId();

        $response = $this->getJson('/api/position/' . $firstProductId);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'payload' => [],
        ]);
    }
}

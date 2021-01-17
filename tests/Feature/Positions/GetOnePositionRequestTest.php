<?php

declare(strict_types = 1);

namespace Tests\Feature\Positions;

use App\Services\Positions\Repositories\PositionsRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Base\BaseTestCase;

class GetOnePositionRequestTest extends BaseTestCase
{
    /**
     * Test get not existing position.
     *
     * @return void
     */
    public function testGetNotExistingPosition(): void
    {
        $response = $this->getJson('/api/position/0');

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['id']);
    }

    /**
     * Test get existing position
     * 
     * @return void
     */
    public function testGetExistingPosition(): void
    {
        $firstPositionId = $this->positionsRepository
            ->getFirstExistingId();

        $response = $this->getJson('/api/position/' . $firstPositionId);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'payload' => [
                0 => [],
            ],
        ]);
    }
}

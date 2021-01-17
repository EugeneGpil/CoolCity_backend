<?php

declare(strict_types = 1);

namespace Tests\Feature\Positions;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Base\BaseTestCase;

class GetAllIdsRequestTest extends BaseTestCase
{
    /**
     * Test get all positions ids
     *
     * @return void
     */
    public function testGetAllPositionsIds(): void
    {
        $response = $this->getJson('/api/positions_ids');

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'payload' => [],
        ]);
    }
}

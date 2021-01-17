<?php

declare(strict_types = 1);

namespace Tests\Feature\Positions;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Base\BaseTestCase;

class GetPositionsRequestTest extends BaseTestCase
{
    /**
     * Test get positions.
     *
     * @return void
     */
    public function testGetPositions(): void
    {
        $response = $this->getJson('/api/positions');

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'payload' => [],
        ]);
    }
}

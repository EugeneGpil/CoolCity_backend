<?php

declare(strict_types = 1);

namespace Tests\Feature\Products;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Base\BaseTestCase;

class GetAllIdsRequestTest extends BaseTestCase
{
    /**
     * Test get all products ids
     *
     * @return void
     */
    public function testAllProductsIds(): void
    {
        $response = $this->getJson('/api/products_ids');

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'payload' => [],
        ]);
    }
}

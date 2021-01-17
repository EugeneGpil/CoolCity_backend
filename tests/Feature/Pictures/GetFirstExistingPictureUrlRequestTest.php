<?php

declare(strict_types = 1);

namespace Tests\Feature\Pictures;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Base\BaseTestCase;

class GetFirstExistingPictureUrlRequestTest extends BaseTestCase
{
    /**
     * Get first existing picture url.
     *
     * @return void
     */
    public function testGetFirstExistingPictureUrl(): void
    {
        $response = $this->getJson('/api/first_existing_picture_url');

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
        ]);
        $response->assertJsonStructure([
            'status',
            'payload',
        ]);
    }
}

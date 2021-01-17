<?php

declare(strict_types = 1);

namespace Tests\Feature\Applications;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Base\BaseTestCase;

class CreateApplicationRequestTest extends BaseTestCase
{
    /**
     * Test create application
     *
     * @return void
     */
    public function testCreateApplication(): void
    {
        $response = $this->postJson('/api/application', [
            'position_id' => $this->positionsRepository
                ->getFirstExistingId(),
            
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
        ]);
    }

    /**
     * Test create application with not existing position
     * 
     * @return void
     */
    public function testCreateApplicationWithNotExistingPosition(): void
    {
        $response = $this->postJson('/api/application', [
            'position_id' => 0,
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['position_id']);
    }

    /**
     * Test create application with too long string params
     * 
     * @return void
     */
    public function testCreateApplicationWithTooLongStringParams(): void
    {
        $tooLongString = $this->createStringWithCertainLength(256);
        
        $extraTooLongString = $this->createStringWithCertainLength(65536);

        $firstExistingPositionId = $this->positionsRepository
            ->getFirstExistingId();

        $requestParamWithTooLongStringsNames = [
            'name',
            'phone',
            'postcode',
            'email',
            'facebook',
            'line',
            'whatsapp',
            'telegram',
            'vk',
        ];

        $requestData = [
            'position_id' => $firstExistingPositionId,
            'address' => $extraTooLongString,
        ];

        foreach ($requestParamWithTooLongStringsNames as $paramName) {
            $requestData[$paramName] = $tooLongString;
        }

        $response = $this->postJson('/api/application', $requestData);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors($requestParamWithTooLongStringsNames);
        $response->assertJsonValidationErrors(['address']);
    }

    /**
     * Create a string with certain length
     * 
     * @param int $length
     * @return string
     */
    private function createStringWithCertainLength(int $length): string
    {
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string[$i] = '1';
        }
        return $string;
    }
}

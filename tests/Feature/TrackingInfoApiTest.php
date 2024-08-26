<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrackingInfoApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_trackinginfo()
    {

        $trackingInfo = [
            'track' => '434c4855423b44533b6d653030323b64653b687474703a2f2f6c6f63616c686f73743b3431343b3839363b5361666172693b31342e312e323b66616c73653b747275653b694f533b31342e382e313b74727565'
        ];

        $response = $this->postJson('/api/trackinginfo', $trackingInfo);
        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'Tracking Info created successfully',
                     'data' => $trackingInfo
                 ]);

        $this->assertDatabaseHas('tracking_info', $trackingInfo);
    }
}

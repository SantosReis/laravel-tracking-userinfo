<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\TrackingInfo;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TrackingInfoApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_trackinginfo()
    {

        $trackingInfo = [
            'track' => '434c4855423b44533b6d653030323b64653b687474703a2f2f6c6f63616c686f73743b3431343b3839363b5361666172693b31342e312e323b66616c73653b747275653b694f533b31342e382e313b74727565'
        ];

        $response = $this->json('GET', '/api', $trackingInfo);
        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'Tracking Info created successfully',
                     'data' => $trackingInfo
                 ]);

        $this->assertDatabaseHas('tracking_info', $trackingInfo);
    }

    public function test_it_can_retrieve_latest_shorteners(): void
    {

        TrackingInfo::factory(5)->create();

        $response = $this->json('GET', '/api/trackinginfo')->assertStatus(200);
        $response->assertJsonCount(5);
    }
}

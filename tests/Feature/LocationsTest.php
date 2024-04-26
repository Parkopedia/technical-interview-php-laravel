<?php

namespace Tests\Feature;

use App\Models\Location;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocationsTest extends TestCase
{
    use RefreshDatabase;

    public function test_endpoint_returns_locations(): void
    {
        Location::factory()->count(5)->create();

        $response = $this->get('/api/locations');

        $response->assertOk();

        $this->assertCount(5, json_decode($response->content(), true));
    }
}

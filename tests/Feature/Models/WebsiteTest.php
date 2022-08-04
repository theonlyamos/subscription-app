<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebsiteTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_websites()
    {
        $response = $this->getJson('/api/v1/websites');
        $response->assertOk();
        $response->assertJson(['status'=>'success']);
    }
}

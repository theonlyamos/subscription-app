<?php

namespace Tests\Feature\Models;

use App\Models\Subscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubscriberTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_subscribers()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_get_subscriber()
    {
        $subscriber = Subscriber::factory()->create();
        $id = $subscriber->id;
        $response = $this->getJson("/api/v1/subscribers/$id");

        $response->assertOk();
    }

    public function test_create_subscriber()
    {
        $data = [
            'website_id' => 2
        ];

        $response = $this->postJson("/api/v1/subscribers/", $data);
        $response->assertCreated();
        $response->assertJson(['subscriber' => ['website' => ['id' => 2]]]);
    }
}

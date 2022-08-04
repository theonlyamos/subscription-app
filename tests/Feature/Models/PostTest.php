<?php

namespace Tests\Feature\Models;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_posts()
    {
        $response = $this->getJson('/api/v1/posts');
        $response->assertOk();
        $response->assertJson(['status'=>'success']);
    }

    public function test_get_post()
    {
        $post = Post::factory()->create();
        $id = $post->id;
        $response = $this->getJson("/api/v1/posts/$id");

        $response->assertOk();
    }

    public function test_create_post()
    {
        $data = [
            'title' => fake()->title(),
            'description' => fake()->realText(),
            'website_id' => 2,
            'user_id' => 1
        ];

        $response = $this->postJson("/api/v1/posts/", $data);
        $response->assertCreated();
        $response->assertJson(['post' => ['title' => $data['title']]]);
    }
}

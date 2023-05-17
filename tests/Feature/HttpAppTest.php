<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HttpAppTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_successful_response_home_page(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_successful_response_posts_page(): void
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function test_successful_response_contact_page(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function test_successful_response_about_page(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}

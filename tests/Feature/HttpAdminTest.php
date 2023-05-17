<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HttpAdminTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function setUp(): void
    {
        parent::setUp();
        Role::create(['title' => 'admin']);
        Role::create(['title' => 'user']);

        $this->admin = User::factory(1)->create(['role_id' => Role::query()->where('title', '=', 'admin')->get()->pluck('id')->first()])->first();
    }


    public function test_successful_response_home_page(): void
    {
        $response = $this->actingAs($this->admin)->withSession(['banned' => false])->get('/admin/users');

        $response->assertStatus(200);
    }

    public function test_successful_response_posts_page(): void
    {
        $response = $this->actingAs($this->admin)->withSession(['banned' => false])->get('/admin/posts');

        $response->assertStatus(200);
    }

    public function test_successful_response_contact_page(): void
    {
        $response = $this->actingAs($this->admin)->withSession(['banned' => false])->get('/admin/categories');

        $response->assertStatus(200);
    }

    public function test_successful_response_about_page(): void
    {
        $response = $this->actingAs($this->admin)->withSession(['banned' => false])->get('/admin/tags');

        $response->assertStatus(200);
    }

    public function tearDown(): void
    {
        $this->artisan('migrate:reset');
        parent::tearDown();
    }
}

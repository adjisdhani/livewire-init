<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_homepage_returns_successful_response_for_authenticated_user(): void
    {
        $user = \App\Models\User::factory()->create();

        $response = $this->actingAs($user)->get('/');

        $response->assertStatus(200);
    }
}

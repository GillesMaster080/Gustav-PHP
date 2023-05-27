<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);

        // Check if the API key is stored in the session.
        $this->assertTrue(session()->has('api_token'));

        // Alternatively, check if the API key is stored in the user's database record.
        $this->assertNotNull($user->api_token);
    }

    public function test_user_can_access_api_with_valid_api_token(): void
    {
        $user = User::factory()->create();

        // Login the user and obtain the API token
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        // Retrieve the API token from the session
        $apiToken = session('api_token');

        // Make a request to an API route with the API token
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $apiToken,
        ])->get('/api/users');

        // Assert that the request was successful
        $response->assertStatus(200);

        // Additional assertions on the API response if needed
        // ...
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}

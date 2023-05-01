<?php
namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /** @test */
    public function it_creates_user_with_valid_data()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
        ];

        $response = $this->post('/users', $userData);

        $response->assertRedirect('/users');

        $this->assertDatabaseHas('users', [
            'name' => $userData['name'],
            'email' => $userData['email'],
        ]);
    }
}

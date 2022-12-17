<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function registration_page_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /** @test */
    public function registration_processed()
    {
        // $this->withoutExceptionHandling();

        $response = $this->post('registration', [
            'username' => 'hanoman',
            'name' => 'Hanoman Prameswara',
            'email' => 'hanomanprame@gmail.com',
            'password' => '12122323',
            'password_confirmation' => '12122323',
        ]);

        // $this->assertAuthenticated();

        $response->assertRedirect('/home');

    }
}

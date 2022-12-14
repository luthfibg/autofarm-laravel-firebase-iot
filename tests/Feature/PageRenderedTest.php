<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageRenderedTest extends TestCase
{

    /** @test */
    public function show_landing_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function show_login_page()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }


    /** @test */
    public function show_register_page()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /** @test */
    public function show_home_page()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    /** @test */
    public function show_realtime_page()
    {
        $response = $this->get('/realtime');

        $response->assertStatus(200);
    }
}

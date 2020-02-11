<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeNewUsers extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function test_it_welcomes_users_with_nickname(){
        $this->get('saludo/pepe/chorizo')
             ->assertStatus(200)
             ->assertSee("Bienvenido pepe, tu apodo es chorizo");
    }
    public function test_it_welcomes_users_without_nickname(){
        $this->get('saludo/pepe')
             ->assertStatus(200)
             ->assertSee("Bienvenido pepe, no tienes apodo");
    }
}

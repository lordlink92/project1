<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Usuarios');
    }


    public function test_it_loads_the_user_list_page()
    {
    $this->get('/usuarios/5')
         ->assertStatus(200)
         ->assertSee('Mostrando detalle del usuario 5');
    }

    public function test_it_loads_the_new_users_page()
    {
    $this->get('/usuarios/nuevo')
         ->assertStatus(200)
         ->assertSee('Crear nuevo usuario');
    }
    public function test_it_loads_the_edit_users_page()
    {
    $this->get('/usuarios/{id}/edit')
         ->assertStatus(200)
         ->assertSee('Aqui se editan usuarios');
    
    }

}
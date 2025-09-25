<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class CreateTaskTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    use RefreshDatabase;
    public function test_can_create_task()
    {
        $response = $this->post('/tasks', [
            'title' => 'Ma nouvelle tâche',
            'detail' => 'Tous les details de ma nouvelle tâche',
        ]);
        $this->assertDatabaseHas('tasks', [
            'title' => 'Ma nouvelle tâche'
        ]);
        $this->get('/tasks')->assertSee('Ma nouvelle tâche');
    }
}

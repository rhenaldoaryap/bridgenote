<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function it_employee()
    {
        $response = $this->get('employee');

        $response->assertStatus(201);
    }

    public function it_create_employee()
    {
        $response = $this->post('employee', []);

        $response->assertStatus(201);
    }

    public function it_update_employee()
    {
        $response = $this->put('/employee/{id}');

        $response->assertStatus(201);
    }

    public function it_delete_employee()
    {
        $response = $this->delete('/employee/{id}');

        $response->assertStatus(201);
    }
}

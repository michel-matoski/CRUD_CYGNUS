<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_can_create_product()
    {
        $data = [
            'name' => 'Test Product',
            'price' => 99.99,
            'description' => 'A product for testing',
        ];
    
        $this->postJson('/api/products', $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
    

}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /** @test */
    public function check_list_rounds_if_is_correct()
    {
        $response = $this->get('/api/list-rounds/2');

        $response->assertStatus(200);
    }
}

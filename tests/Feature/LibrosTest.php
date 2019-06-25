<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LibrosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLibrosRoute()
    {
        $response = $this->get("/admin/libro");
        $response->assertStatus(302);
    }
}

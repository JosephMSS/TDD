<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_user()
    {
        //Proceso
        User::factory()->create([
            'email'=>'i@admin.com'
        ]);
        $this->assertDatabaseHas('users', ['email' => 'i@admin.com']);
        $this->assertDatabaseMissing('users', ['email' => 'no@admi.com']);
    }
}

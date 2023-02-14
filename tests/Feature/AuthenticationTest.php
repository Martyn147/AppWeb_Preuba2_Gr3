<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_interacting_with_the_session()
    {
        $response = $this->withSession(['banned' => false])->get('/');
        // $user = User::factory()->create();
 
        // $response = $this->actingAs($user,)
        //                  ->withSession(['banned' => false])
        //                  ->get('/');

        

    }

    
}

///vendor/bin/phpunit --filter AuthenticationTest
<?php

namespace Tests\Unit;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\Kernel;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_the_view_actually_exists()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertViewIs('pages.auth.register');
        $response1 = $this->get('/login');
        $response1->assertStatus(200);
        $response1->assertViewIs('pages.auth.login');
        // $response2 = $this->get('/profile/1');
        // $response2->assertStatus(200);
        // $response2->assertViewIs('pages.auth.profile');
        
    }
}

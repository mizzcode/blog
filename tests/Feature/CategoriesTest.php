<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    public function testLoginSuccess()
    {
        $this->post(route('postLogin'), [
            'username' => 'mizzcode',
            'password' => 'mizzcode'
        ])
            ->assertRedirect(route('dashboard'));
    }

    public function testCategories()
    {
        $user = User::find(1);

        $response = $this->post(route('postLogin'), [
            'username' => $user->username,
            'password' => 'mizzcode'
        ]);

        $response->assertRedirect(route('dashboard'));

        // Membuat pengguna yang terautentikasi dan mengirim permintaan GET untuk halaman kategori
        $response = $this->actingAs($user)->get(route('dashboard-categories.index'));

        $response->assertStatus(200)
            ->assertSee('OK');
    }
}

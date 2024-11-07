<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase; // تأكد من أن ملف TestCase الأساسي موجود في مجلد Tests.

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_access_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_user_cannot_access_admin_panel()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin');

        $response->assertStatus(403); // Unauthorized
    }

    public function test_user_registration_requires_name_email_and_password()
    {
        // تجاوز التحقق من CSRF
        $this->withoutMiddleware();

        $response = $this->post('/register', [
            'name' => '',
            'email' => '',
            'password' => '',
            'password_confirmation' => '',
        ]);

        // تأكد من أن الاستجابة تعيد حالة 302 (إعادة توجيه)
        $response->assertStatus(302);

        // تأكد من أن هناك أخطاء في الجلسة
        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }





    public function test_user_creation_inserts_data_in_database()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }
}

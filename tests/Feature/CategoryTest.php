<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CategoryTest extends TestCase
{
use RefreshDatabase ;
    #[Test]
    public function it_can_create_a_category()
    {
        $response = $this->withoutMiddleware()->post(route('admin.category.store'), [
            'name' => 'الاعشاب-العلاجیة',
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('categories', [
            'name' => 'الاعشاب-العلاجیة',
        ]);
    }
    public function it_can_list_categories()
    {
        // تأكد من إنشاء فئة في الاختبار
        $category = Category::factory()->create(['slug' => 'your-category-slug']);

        // استخدم `slug` عند استدعاء المسار
        $response = $this->get(route('admin.category.index', ['slug' => $category->slug]));

        $response->assertStatus(200);
        // تحقق من وجود الفئة في الاستجابة
        $this->assertSee($category->name); // أو أي تحقق آخر حسب الحاجة
    }

}


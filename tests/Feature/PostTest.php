<?php


namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test; // تأكد من تضمين هذا السطر

class PostTest extends TestCase
{
    use RefreshDatabase; // تأكد من استخدام هذا لتفريغ قاعدة البيانات

    #[Test]
    public function it_can_create_a_post()
    {
        $category = Category::factory()->create();
        $file = UploadedFile::fake()->image('post.jpg');

        // إرسال طلب POST مع الصورة الوهمية
        $response = $this->withoutMiddleware()->post(route('admin.posts.store'), [
            'title' => 'New Post New Post',
            'body' => 'This is the body of the post.',
            'category_id' => $category->id,
            'image' => $file,
        ]);

        $response->assertStatus(302); // تحقق من حالة الاستجابة

        // تحقق من وجود المنشور في قاعدة البيانات
        $this->assertDatabaseHas('posts', [
            'title' => 'New Post New Post',
            'body' => 'This is the body of the post.',
            'category_id' => $category->id,
        ]);
    }

    #[Test]
    public function it_can_list_posts()
    {
        $category = Category::factory()->create();
        Post::factory()->count(4)->create(['category_id' => $category->id]);

        // إجراء الطلب إلى المسار المناسب وتخزين الاستجابة
        $response = $this->withoutMiddleware()->get(route('admin.posts.index'));

        // تحقق من حالة الاستجابة
        $response->assertStatus(200);

        // تحقق من العرض المستخدم
        $response->assertViewIs('admin.post.index');

        // تحقق من وجود المتغير "posts" في العرض
        $response->assertViewHas('posts');

        // تأكد من وجود 3 منشورات في المتغير
        $this->assertCount(4, $response->viewData('posts'));
    }
}

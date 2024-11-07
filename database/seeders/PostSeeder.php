<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
//    public function run()
//    {
//        $posts = Post::factory()->count(50)->make();
//        $posts->each->save(); // أو استخدم create() مباشرة
//    }



//  public function run()
//    {
//        Article::create([
//            'title' => 'first project',
//            'description' => 'This is the first project.44444',
//            'image' => 'path/to/image.jpg', // استبدل هذا بمسار الصورة الفعلي
//        ]);
//    }
    public function run()
    {
        // استخدام حلقة for لإضافة 10 مقالات
        for ($i = 1; $i <= 40; $i++) {
            Post::create([
                'title' => "Project Title $i",
                'body' => "This is the description for project $i.",
                'category_id' => rand(1, 3),
                'image' => 'path/to/image.jpg', // استبدل هذا بمسار الصورة الفعلي
            ]);
        }
    }


}

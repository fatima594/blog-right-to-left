<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DetailsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\LanguageController;
use App\Http\Controllers\User\SubscriberController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $trendings = Post::all(); // جلب أحدث 5 مقالات مع الفئات
    $categories = Category::all();

    // جلب 5 مقالات فقط من فئة الرياضة
   $trendingPosts = Post::whereHas('category', function ($query) {
        $query->where('name', 'تحضیر-المعجنات');
    })->take(1)->get();




    $sliders = Post::whereHas('category', function ($query) {
        $query->whereIn('name', [ 'الاعشاب- العلاجیة'  , 'تحضیر الشوربات' ,'تحضیر حلویات']); // استخدام whereIn لفحص أسماء الفئات المتعددة
    })->take(4)->get();



    // جلب جميع المقالات مع العلامات
    $posts = Post::all();


    // إرجاع العرض مع البيانات
    return view('layouts.master', [
        'posts' => $posts,
        'trendings' => $trendings,
        'categories' => $categories,
        'trendingPosts' => $trendingPosts,
        'sliders' => $sliders,

    ]);
});


Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');

Route::get('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');
Route::get('/set-language', [LanguageController::class, 'setLanguage'])->name('set.language');

//   details contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



Route::get('/blog', function () {
    $posts= Post::all();
    return view('layouts.blog' ,  ['posts' => $posts]);
});
Route::get('/contact', function () {
    $posts= Post::all();
    return view('layouts.contact' , ['posts' => $posts]);
});


Route::get('/trending', function () {
    $trendings = Post::with('category')->latest()->take(10)->get();
    return view('layouts.trending', compact('trendings'));
});


Route::get('/single', function () {
    return view('layouts.single-post');
});

Route::get('/single/{slug}', [DetailsController::class, 'show'])->name('post.single');
//Route::get('/trending', [DetailsController::class, 'trending'])->name('posts.trending');
Route::get('category/{categoryId}', [DetailsController::class, 'indexByCategory'])->name('posts.indexByCategory');
Route::get('/categories/{slug}', [CategoryController::class, 'index'])->name('category.index');

// Blog detail route by ID
//Route::get('post/{id}', [DetailsController::class, 'show'])->name('posts.show');
//
//Route::middleware('web')->group(function () {
//    Route::post('/login', [LoginController::class, 'login']);
//});















Route::post('/comments/{post}', [CommentController::class, 'store'])->name('comments.store');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Admin routes with prefix 'admin'
Route::prefix('admin')->name('admin.')->group(function () {
    // Show admin login form
    Route::get('/login', [DashboardController::class, 'showLoginForm'])->name('login');
    // Handle admin login
    Route::post('/login', [DashboardController::class, 'adminlogin'])->name('login.submit');
    // Show admin registration form
    Route::get('/register', [DashboardController::class, 'showRegistrationForm'])->name('register');
    // Handle admin registration
    Route::post('/register', [DashboardController::class, 'adminregister'])->name('register.submit');



    Route::middleware('auth:admin')->group(function () {
        // Show admin dashboard
        Route::get('/index', [DashboardController::class, 'dashboard'])->name('index');
//routes of categories
        Route::get('admin/category', [CategoryController::class, 'index'])->name('category.index');
// عرض نموذج الإدخال
        Route::get('admin/category/create', [CategoryController::class, 'create'])->name('category.create');
// حفظ البيانات
        Route::post('admin/category', [CategoryController::class, 'store'])->name('category.store');
// عرض نموذج التعديل
        Route::get('admin/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
// تحديث البيانات
        Route::put('admin/category/{category}', [CategoryController::class, 'update'])->name('category.update');
// حذف البيانات
        Route::delete('admin/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
// عرض تفاصيل منشور واحد
        Route::get('admin/category/{id}', [CategoryController::class, 'show'])->name('category.show');

//routes of posts
// عرض جميع المنتجات
        Route::get('admin/posts', [PostController::class, 'index'])->name('posts.index');

// عرض نموذج الإدخال
        Route::get('admin/posts/create', [PostController::class, 'create'])->name('posts.create');

// حفظ البيانات
        Route::post('admin/posts', [PostController::class, 'store'])->name('posts.store');

// عرض نموذج التعديل
        Route::get('admin/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// تحديث البيانات
        Route::put('admin/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// حذف البيانات
        Route::delete('admin/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// عرض تفاصيل منتج واحد
        Route::get('admin/posts/{post}', [PostController::class, 'show'])->name('posts.show');




    });
});

require __DIR__.'/auth.php';


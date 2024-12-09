<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/welcome', [AuthController::class, 'index'])->name('welcome');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-dashboard', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin.dashboard');

    //configuration
    Route::get('/admin-dashboard/configuration', [App\Http\Controllers\admin\ConfigurationController::class, 'index'])->name('configuration.index');
    Route::post('/admin-dashboard/configuration', [App\Http\Controllers\admin\ConfigurationController::class, 'storeOrUpdate'])->name('configuration.store');

    //about us
    Route::get('/admin-dashboard/about-us', [App\Http\Controllers\admin\AboutUsController::class, 'index'])->name('about-us.index');
    Route::post('/admin-dashboard/about-us', [App\Http\Controllers\admin\AboutUsController::class, 'storeOrUpdate'])->name('about-us.store');

    //Contact
    Route::get('/admin-dashboard/contacts', [App\Http\Controllers\admin\ContactController::class, 'index'])->name('contacts.index');
    Route::post('/admin-dashboard/contacts', [App\Http\Controllers\admin\ContactController::class, 'storeOrUpdate'])->name('contacts.store');

    //slider
    Route::resource('/admin-dashboard/slider', App\Http\Controllers\admin\SliderController::class);

    //superiority
    Route::resource('/admin-dashboard/superiority', App\Http\Controllers\admin\SuperiorityController::class);

    //service
    Route::resource('/admin-dashboard/services', App\Http\Controllers\admin\ServiceController::class);

    //gallery
    Route::resource('/admin-dashboard/gallery', App\Http\Controllers\admin\GalleryController::class);

    //blog
    Route::resource('/admin-dashboard/blogs', App\Http\Controllers\admin\BlogController::class);
    //category
    Route::resource('/admin-dashboard/categories-blogs', App\Http\Controllers\admin\CategoryBlogController::class);


    //testimonial
    Route::resource('/admin-dashboard/testimonial-clients', App\Http\Controllers\admin\TestimonialClientController::class);
});

Route::get('/', function () {
    return view('frontend.index');
});

Route::controller(App\Http\Controllers\FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/promo', 'promo')->name('promo');
    Route::get('/services', 'services')->name('services');
    Route::get('/service/{category_id}', 'DetailService')->name('detail_service');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{id}', 'detailblog')->name('blog-detail');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blogs/search', 'search')->name('blog.search');
    Route::get('/blogs/categoryBlog{category_id}', 'categoryBlog')->name('blog.category');

    Route::get('/not-found', 'notFound')->name('not-found');
});

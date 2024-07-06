<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BulletPointController;
use App\Http\Controllers\ContactChangeController;
use App\Http\Controllers\Dashboard\BaseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Frontend Route

Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
Route::get('/all-products', [WebsiteController::class, 'allProducts'])->name('website.allProducts');
Route::get('/search-products', [WebsiteController::class, 'search'])->name('website.search');
Route::get('/product/{id}', [WebsiteController::class, 'product'])->name('website.product');
Route::get('/category/{id}', [WebsiteController::class, 'category'])->name('website.category');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/sitemap', [WebsiteController::class, 'sitemap'])->name('website.sitemap');

// Website send mail 
Route::post('/send-email', [WebsiteController::class, 'submitForm'])->name('contact.submit');


Route::get('/engineering-produts', [WebsiteController::class, 'engineeringProduts'])->name('engineeringProduts');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



require __DIR__.'/auth.php';



// Dashboard Route
Route::get('/home', [BaseController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');



// Category Route

Route::resource('categories', CategoryController::class);
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');



// Product Route
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::resource('products', ProductController::class);
Route::post('products/{product}/bullet-points', [BulletPointController::class, 'store'])->name('bullet-points.store');
Route::delete('bullet-points/{id}', [BulletPointController::class, 'destroy'])->name('bullet-points.destroy');




// Contact details change route
Route::get('/dashboard/contact/edit', [ContactChangeController::class, 'edit'])->name('dashboard.contact.edit');
Route::put('/dashboard/contact/update', [ContactChangeController::class, 'update'])->name('dashboard.contact.update');




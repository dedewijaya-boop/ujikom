<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CategoryController,
    AboutController,
    ShopController,
    OrderController,
    WishlistController,
    HomeController,
    ProfileController,
    CartController,
    CheckoutController,
    ContactController,
    ReviewController,
    ImageController
};

use App\Http\Controllers\Admin\{
    AdminController,
    AdminCategoryController,
    AdminProductController,
    AdminOrderController,
    AdminUserController,
    AdminDiscountController
};

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/products/{product}', [ShopController::class, 'show'])->name('products.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/search', [ShopController::class, 'search'])->name('search');

// Image serving route
Route::get('/storage/{disk}/{path}', [ImageController::class, 'serve'])
    ->where('path', '.*')
    ->name('image.serve');

/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/

Route::get('/guide-des-tailles', function () {
    return view('size-guide');
})->name('size-guide');

Route::get('/livraison-retours', function () {
    return view('shipping-returns');
})->name('shipping-returns');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/

Route::get('/contactez-nous', [ContactController::class, 'show'])->name('contact.show');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| User Routes (Login Required)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});

/*
|--------------------------------------------------------------------------
| Admin Routes (FIXED)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Categories
    Route::resource('/categories', AdminCategoryController::class)->names('admin.categories');

    // Products
    Route::resource('/products', AdminProductController::class)->names('admin.products');

    // Orders
    Route::resource('/orders', AdminOrderController::class)
        ->names('admin.orders')
        ->except(['create','store']);

    // Users
    Route::resource('/users', AdminUserController::class)->names('admin.users');

    // Discounts
    Route::resource('/discounts', AdminDiscountController::class)->names('admin.discounts');

    // Product Detail
    Route::get('/product/{product}', [AdminProductController::class, 'show'])->name('admin.product.show');

    // Category Detail
    Route::get('/categories/{category}', [AdminCategoryController::class, 'show'])->name('admin.category.show');

    // Invoice
    Route::get('/orders/{order}/invoice', [OrderController::class, 'invoice'])->name('admin.orders.invoice');
});
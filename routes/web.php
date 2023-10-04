<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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


Route::get('/', [WebsiteController::class, 'website'])->name('website');
Route::get('/main', [WebsiteController::class, 'main'])->name('main');
Route::get('/menus/{category?}', [WebsiteController::class, 'menus'])->name('menus');
Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

//  Admin Panel Routes

Route::middleware(['auth'])->group(function () {
    Route::get('/panel', [AdminController::class, 'panel'])->middleware('auth', 'can:isAdmin');
    Route::resource('/users', UserController::class);
    Route::get('/order', [OrderController::class, 'order'])->name('order');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/cart', [WebsiteController::class, 'cart'])->name('cart');
    Route::post('cart/add/{product}', [CartController::class, 'addtocart'])->name('cart.add');
    Route::get('/remove_cart/{id}', [CartController::class, 'remove_cart'])->name('remove_cart');
    // Route for viewing order history
    Route::get('/orders', [WebsiteController::class, 'orders'])->name('orders');
    Route::get('/process-to-checkout', [OrderController::class, 'processToCheckout'])->name('processToCheckout');
    // Route for placing an order
    Route::post('/place-order', [WebsiteController::class, 'placeOrder'])->name('place-order');
    Route::controller(StripePaymentController::class)->group(function () {
        Route::post('stripe-view', 'stripe')->name('stripe.view');
        Route::post('stripe-store', 'stripePost')->name('stripe.post');
    });
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

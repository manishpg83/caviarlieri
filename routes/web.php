<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\WarehouseOrderUpdate;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PayPalWebhookController;
use App\Http\Controllers\Frontend\Auth\FrontAuthController;
use App\Http\Controllers\Admin\WarehouseOrderUpdateController;

// Public routes
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/login', [FrontAuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [FrontAuthController::class, 'login'])->name('login');
Route::get('/register', [FrontAuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [FrontAuthController::class, 'register'])->name('register');
Route::post('/logout', [FrontAuthController::class, 'logout'])->name('logout');

Route::get('forgot-password', [FrontAuthController::class, 'showForgotPasswordForm'])
->name('password.request');
Route::post('forgot-password', [FrontAuthController::class, 'sendResetLinkEmail'])
->name('password.email');
Route::get('reset-password/{token}', [FrontAuthController::class, 'showResetPasswordForm'])
->name('password.reset');
Route::post('reset-password', [FrontAuthController::class, 'resetPassword'])
->name('password.update');

Route::get('/warehouse/update-delivery/{delivery_order_id}', [WarehouseOrderUpdateController::class, 'edit'])
    ->name('warehouse.update.delivery.form');

Route::post('/warehouse/update-delivery/{delivery_order_id}', [WarehouseOrderUpdateController::class, 'update'])
    ->name('warehouse.update.delivery');
// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/myaccount', [HomeController::class, 'myAccount'])->name('myaccount');
    Route::get('/myorders', [HomeController::class, 'myOrders'])->name('myorders');
    Route::get('/orderview/{order_id?}', [HomeController::class, 'orderview'])->name('orderview');
    Route::get('/myprofile', [HomeController::class, 'myProfile'])->name('myprofile');
    Route::get('/billingaddress', [HomeController::class, 'billingaddress'])->name('billingaddress');
    Route::get('/addbillingaddress/{id?}', [HomeController::class, 'addbillingaddress'])->name('addbillingaddress');
    Route::get('/shippingaddress/{addressNumber?}', [HomeController::class, 'shippingaddress'])->name('shippingaddress');
    Route::get('/addshippingaddress', [HomeController::class, 'addshippingaddress'])->name('addshippingaddress');
    // Add these with your other routes
    Route::get('/checkout/error', function () {
        return view('frontend.checkout.error');
    })->name('checkout.error');

    Route::get('/checkout', function () {
        return view('frontend.checkout');
    })->name('checkout');
    Route::get('/addbillingaddress/{id?}', [HomeController::class, 'addbillingaddress'])->name('addbillingaddress');
});
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/paypal-webhook', [PayPalWebhookController::class, 'handle'])->name('paypal.webhook');
Route::get('/paypal/success', [PayPalWebhookController::class, 'success'])->name('paypal.success');
Route::get('/paypal/cancel', [PayPalWebhookController::class, 'cancel'])->name('paypal.cancel');
Route::get('/order/success', function () {
    return view('frontend.order.success');
})->name('order.success');

//cavilairy
Route::get('/swiss-cellular-therapy', [HomeController::class, 'swisscellulartherapy'])->name('swisscellulartherapy');
Route::get('/outstanding-benefits', [HomeController::class, 'outstandingbenefits'])->name('outstandingbenefits');
Route::get('/clinical-science', [HomeController::class, 'clinicalscience'])->name('clinicalscience');
Route::get('/experts-opinions', [HomeController::class, 'expertsopinions'])->name('expertsopinions');
Route::get('/key-ingredients', [HomeController::class, 'keyingredients'])->name('keyingredients');
Route::get('/luxury-of-caviar', [HomeController::class, 'luxuryofcaviar'])->name('luxuryofcaviar');
Route::get('/Swiss-Caviarlieri-Beauty', [HomeController::class, 'swisscaviarlieribeauty'])->name('swisscaviarlieribeauty');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

include __DIR__.'/admin.php';
include __DIR__.'/vendor.php';


<?php

use App\Models\User;
use App\Notifications\OTPSms;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Home\AddressController;
use App\Http\Controllers\Home\CompareController;
use App\Http\Controllers\Home\PaymentController;
use App\Http\Controllers\Home\SitemapController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Home\WishlistController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GetimageController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Home\UserProfileController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Home\UsersProfileController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Home\CommentController as HomeCommentController;
use App\Http\Controllers\Home\HomeProductController;
use App\Http\Controllers\Home\CategoryController as HomeCategoryController;
use App\Http\Controllers\Home\HomeCourseController;
use App\Http\Controllers\Home\userSectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin-panel/dashboard', [AdminController::class , 'index'])->name('dashboard');

Route::prefix('admin-panel/management')->name('admin.')->group(function () {

    // Route::resource('brands', BrandController::class);
    // Route::resource('attributes', AttributeController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('course', CourseController::class);
    Route::resource('products', ProductController::class);
    // Route::resource('tags', TagController::class);
    // Route::resource('products', ProductController::class);
    // Route::resource('banners', BannerController::class);
    // Route::resource('comments', CommentController::class);
    // Route::resource('coupons', CouponController::class);
    // Route::resource('orders', OrderController::class);
    // Route::resource('transactions', TransactionController::class);
    // Route::resource('users', UserController::class);
    // // Route::resource('permissions', PermissionController::class);
    // // Route::resource('roles', RoleController::class);
});

Route::post('/uploadImage', [CourseController::class, 'getImage']);
Route::get('/' , [HomeController::class , 'index']);
Route::resource('/courses' , HomeCourseController::class);
Route::resource('/products' , HomeProductController::class);
Route::get('/profile' , [userSectionController::class , 'profile']);
// Route::get('/add-to-wishlist/{product}', [WishlistController::class, 'add'])->name('home.wishlist.add');
// Route::get('/remove-from-wishlist/{product}', [WishlistController::class, 'remove'])->name('home.wishlist.remove');


// Route::post('/payment', [PaymentController::class, 'payment'])->name('home.payment');
// Route::get('/payment-verify/{gatewayName}', [PaymentController::class, 'paymentVerify'])->name('home.payment_verify');

Route::any('/login', [AuthController::class, 'login'])->name('login');
Route::post('/check-otp', [AuthController::class, 'checkOtp']);
Route::post('/resend-otp', [AuthController::class, 'resendOtp']);









Route::get('/test', function () {

    // \Cart::clear();
    // dd( \Cart::getContent() );
    // dd( session()->get('coupon.id') );


});

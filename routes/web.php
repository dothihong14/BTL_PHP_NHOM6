<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckPaymentController;
use App\Livewire\AboutUs;
use App\Livewire\Blog;
use App\Livewire\BlogDetail;
use App\Livewire\CancelPage;
use App\Livewire\Checkpayment;
use App\Livewire\Contact;
use App\Livewire\ForgotPassword;
use App\Livewire\OrderDetails;
use App\Livewire\OrderHistory;
use App\Livewire\Page\Home;

use App\Livewire\Page\HotelBook;
use App\Livewire\Page\HotelDetail;
use App\Livewire\Page\HotelFoods;
use App\Livewire\Page\HotelRooms;
use App\Livewire\Page\Hotels;
use App\Livewire\ResetPassword;
use App\Livewire\SuccessPage;
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

Route::get('/', Home::class)->name('home');
Route::get('/hotels', Hotels::class)->name('hotels');
Route::get('/hotels/{hotelId}/booking', HotelBook::class)->name('hotels.booking');
Route::get('/hotels/{id}/detail', HotelDetail::class)->name('hotel.details');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/about-us', AboutUs::class)->name('about.us');
Route::get('/order-history', OrderHistory::class)->name('order.history');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/success-page', SuccessPage::class)->name('success.page');
Route::get('/cancel-page', CancelPage::class)->name('cancel.page');
Route::get('/order-details/{bookingId}', OrderDetails::class)->name('order.details');
Route::get('/blog', Blog::class)->name('blog.index'); // Route cho danh sách bài viết
Route::get('/blog/{slug}', BlogDetail::class)->name('blog.detail'); // Route cho chi tiết bài viết
Route::get('/checkpayment', Checkpayment::class)->name('checkpayment');
Route::get('/forgot-password', ForgotPassword::class)->name('password.forgot');
Route::get('/reset-password/{token}', ResetPassword::class)->name('password.reset');
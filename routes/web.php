<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
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

// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Appointment Routes
Route::resource('appointments', AppointmentController::class)->except(['index', 'create', 'show', 'edit']);
Route::get('appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::get('appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::get('appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');

// Payment Routes
Route::post('payments', [PaymentController::class, 'store'])->name('payments.store');

// Program Routes
Route::resource('programs', ProgramController::class)->except(['index', 'create', 'show', 'edit']);
Route::get('programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('programs/create', [ProgramController::class, 'create'])->name('programs.create');
Route::get('programs/{program}', [ProgramController::class, 'show'])->name('programs.show');
Route::get('programs/{program}/edit', [ProgramController::class, 'edit'])->name('programs.edit');

// Service Routes
Route::resource('services', ServiceController::class)->except(['index', 'create', 'show', 'edit']);
Route::get('services', [ServiceController::class, 'index'])->name('services.index');
Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
Route::get('services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');

// Pages route
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/index', function () {
    return view('index');
})->name('page');
Route::get('/add-billing', function () {
    return view('add-billing');
})->name('add-billing');
Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/booking-success', function () {
    return view('booking-success');
})->name('booking-success');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/components', function () {
    return view('components');
})->name('components');
Route::get('/favourites', function () {
    return view('favourites');
})->name('favourites');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/invoice-view', function () {
    return view('invoice-view');
})->name('invoice-view');
Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/find-counselor', function () {
    return view('map-grid');
})->name('find-counselor');
Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/term-condition', function () {
    return view('term-condition');
})->name('term-condition');
Route::get('/social-media', function () {
    return view('social-media');
})->name('social-media');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/schedule-timings', function () {
    return view('schedule-timings');
})->name('schedule-timings');
Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/map-list', function () {
    return view('map-list');
})->name('map-list');
Route::get('/add-prescription', function () {
    return view('add-prescription');
})->name('add-prescription');
Route::get('/appointment-detail', function () {
    return view('appointment-detail');
})->name('appointment-detail');
Route::get('/chat-councellor', function () {
    return view('chat-councellor');
})->name('chat-councellor');
Route::get('/choose-service', function () {
    return view('choose-service');
})->name('choose-service');
Route::get('/councellor-change-password', function () {
    return view('councellor-change-password');
})->name('councellor-change-password');
Route::get('/councellor-dashboard', function () {
    return view('councellor-dashboard');
})->name('councellor-dashboard');
Route::get('/councellor-profile-settings', function () {
    return view('councellor-profile-settings');
})->name('councellor-profile-settings');
Route::get('/councellor-profile', function () {
    return view('councellor-profile');
})->name('councellor-profile');
Route::get('/councellor-register', function () {
    return view('councellor-register');
})->name('councellor-register');
Route::get('/edit-billing', function () {
    return view('edit-billing');
})->name('edit-billing');
Route::get('/edit-prescription', function () {
    return view('edit-prescription');
})->name('edit-prescription');
Route::get('/find-councellor', function () {
    return view('find-councellor');
})->name('find-councellor');
Route::get('/health-profile', function () {
    return view('health-profile');
})->name('health-profile');
Route::get('/my-account', function () {
    return view('my-account');
})->name('my-account');
Route::get('/my-councellor-profile', function () {
    return view('my-councellor-profile');
})->name('my-councellor-profile');
Route::get('/my-councellor', function () {
    return view('my-councellor');
})->name('my-councellor');
Route::get('/my-patients', function () {
    return view('my-patients');
})->name('my-patients');
Route::get('/patient-add-dependent', function () {
    return view('patient-add-dependent');
})->name('patient-add-dependent');
Route::get('/patient-dashboard', function () {
    return view('patient-dashboard');
})->name('patient-dashboard');
Route::get('/patient-dependent', function () {
    return view('patient-dependent');
})->name('patient-dependent');
Route::get('/patient-profile', function () {
    return view('patient-profile');
})->name('patient-profile');
Route::get('/select-payment', function () {
    return view('select-payment');
})->name('select-payment');
Route::get('/type-of-visit', function () {
    return view('type-of-visit');
})->name('type-of-visit');
Route::get('/visit-confirmed', function () {
    return view('visit-confirmed');
})->name('visit-confirmed');
Route::get('/visit-question', function () {
    return view('visit-question');
})->name('visit-question');
Route::get('/visit-reason', function () {
    return view('visit-reason');
})->name('visit-reason');

require __DIR__.'/auth.php';

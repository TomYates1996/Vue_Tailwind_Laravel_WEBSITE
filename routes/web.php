<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SubscriberController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::get('/accounts', [AccountController::class, 'index']);
Route::prefix('/account')->group( function () {
    Route::post('/store', [AccountController::class, 'store']);
    Route::put('/{id}', [AccountController::class, 'update']);
    Route::delete('/{id}', [AccountController::class, 'destroy']);
    }
);

Route::get('/blog_posts', [BlogPostController::class, 'index']);
Route::get('/latest_blog', [BlogPostController::class, 'recent']);
Route::get('/recent_posts', [BlogPostController::class, 'recentFew']);
Route::prefix('/blog_post')->group( function () {
    Route::post('/store', [BlogPostController::class, 'store']);
    Route::put('/{id}', [BlogPostController::class, 'update']);
    Route::delete('/{id}', [BlogPostController::class, 'destroy']);
    }
);

Route::post('/new_sub', [SubscriberController::class, 'store']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/tutorial/{category_slug}', [FrontendController::class, 'viewCategorySlug']);
Route::get('/tutorial/{category_slug}/{post_slug}', [FrontendController::class, 'viewPost']); // View single Post

// Hierarchical Books
Route::get('book-tree-view', [App\Http\Controllers\BookController::class, 'manageBook'])->name('book-tree-view');
Route::post('add-book', [App\Http\Controllers\BookController::class, 'addBook'])->name('add.book');

// Comment
Route::resource('comments', CommentController::class);
Route::post('delete-comment', [CommentController::class,  'deleteComment']); // This URL coming from resources\views\frontend\post\view.blade.php file.

// Authentication
Auth::routes();

// Unneccssary
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admmin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    // isAdmin from Kernel.php→AdminMiddleware.php
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/add-category', [CategoryController::class, 'create']);
    Route::post('/add-category', [CategoryController::class, 'store']);
    Route::get('/edit-category/{category_id}', [CategoryController::class, 'edit']);
    Route::put('/update-category/{category_id}', [CategoryController::class, 'update']);
    Route::get('/delete-category/{category_id}', [CategoryController::class, 'destroy']);

    Route::resource('posts', PostController::class);

    Route::resource('users', UserController::class);

    Route::resource('settings', SettingsController::class);
});

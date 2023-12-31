<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;
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

//index page
Route::get('/', [PostController::class, 'HomePage']);

//create post
Route::get('/create-post', [PostController::class, 'createPostView'])->middleware('isLoggedIn');


//create post
Route::post('/create-post', [PostController::class, 'createPost']);

//delete post
Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('delete.post')->middleware('isLoggedIn');


//edit post
Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('edit.post')->middleware('isLoggedIn');

//detail post
Route::get('/detail-post/{id}', [PostController::class, 'detailPost'])->name('detail.post')->middleware('isLoggedIn');

//update post
Route::post('/update-post/{id}', [PostController::class, 'updatePost'])->name('update.post')->middleware('isLoggedIn');



Route::get('/allposts', [PostController::class, 'postView'])->middleware('isLoggedIn');


//admins page 

Route::get('/admin/admin-view', [AdminController::class, 'adminView'])->middleware('isLoggedIn');


//dashboard page
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('isLoggedIn');

//logout 
Route::get('/logout', [HomeController::class, 'logout']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::get('/admin/register', [MyController::class, 'showRegister']);
Route::get('/admin/login', [MyController::class, 'showLogin']);






//register form
Route::post('/admin/register', [AdminController::class, 'registerAdmin']);

//Login form
Route::post('/admin/login', [AdminController::class, 'loginAdmin'])->name("admin-login");


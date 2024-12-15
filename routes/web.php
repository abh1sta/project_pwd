<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login',[LoginController::class,'login'])->name('post.login');

Route::get('/login', function () {
    return view('login');
})->name('get.login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [LoginController::class, 'register'])->name('post.register');


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/createmenu', [MenuController::class, 'storeMenu'])->name('post.create');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::resource('recipes', RecipeController::class);

Route::get('/menu', [RecipeController::class, 'index']);

Route::get('/menu', [RecipeController::class, 'index'])->name('menu');

Route::post('/menu', [RecipeController::class, 'store'])->name('store.menu');

Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');

Route::get('/dashboard', [App\Http\Controllers\RecipeController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


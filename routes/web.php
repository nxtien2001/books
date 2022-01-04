<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\HomeController;

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

//CLIENT
Route::get('/', [HomeController::class, 'index'])->name('home');

//LOGIN
Route::post('login',  [LoginController::class, 'login'])->name('login');
Route::get('logout',  [LoginController::class, 'logout'])->name('logout');

//REGISTER
Route::post('/dang-ky', [RegisterController::class, 'post'])->name('postRegister');

//ADMIN
Route::group([
    'middleware' => ['check_login'],
], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    //CATEGORY
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['check_admin'],
    ], function () {
        //CATEGORY
        Route::group([
            'prefix' => 'categories',
            'as' => 'categories.',
            'middleware' => ['check_admin'],
        ], function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::post('/store', [CategoryController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        });
        //BOOK
        Route::group([
            'prefix' => 'books',
            'as' => 'books.',
            'middleware' => ['check_admin'],
        ], function () {
            Route::get('/', [\App\Http\Controllers\Admin\BookController::class, 'index'])->name('index');
            Route::get('/create', [BookController::class, 'create'])->name('create');
            Route::post('/store', [BookController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [BookController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [BookController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');
            Route::get('/deleteCover/{id}', [BookController::class, 'deleteCover'])->name('deleteCover');
            Route::get('/deleteImage/{id}', [BookController::class, 'deleteImage'])->name('deleteImage');
            Route::get('/{id}', [BookController::class, 'show'])->name('show');
        });
        //SLIDER
        Route::group([
            'prefix' => 'sliders',
            'as' => 'sliders.',
            'middleware' => ['check_admin'],
        ], function () {
            Route::get('/', [SliderController::class, 'index'])->name('index');
            Route::get('/create', [SliderController::class, 'create'])->name('create');
            Route::post('/store', [SliderController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [SliderController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('delete');
            Route::get('/active/{slide_id}', [SliderController::class, 'active'])->name('active');
            Route::get('/unactive/{slide_id}', [SliderController::class, 'unactive'])->name('unactive');
        });
        //USER
        Route::group([
            'prefix' => 'users',
            'as' => 'users.',
            'middleware' => ['check_admin'],
        ], function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/store', [UserController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
        });
    });
});

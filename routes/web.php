<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\OrderController;

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


Route::name('app.')->group(function () {
    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/shops', 'shops')->name('shops');
        Route::get('/shops/{id}', 'shop')->name('shop');
        Route::get('/authors', 'authors')->name('authors');
        Route::get('/author/{id}', 'author')->name('author');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/basket', 'basket')->name('basket');
        Route::post('/comment/{product_id}', 'comment')->name('comment');


        Route::get('/order', 'order')->name('order');
    });

    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::controller(AuthController::class)->group(function(){

        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'registerPost')->name('registerPost');
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginPost')->name('loginPost');
        Route::get('/profile', 'profile')->name('profile')->middleware('auth');
        Route::post('/profile', 'profileUpdate')->name('profileUpdate');
        Route::get('/logout', 'logout')->name('logout');

    });


    Route::post('/orderpost', [OrderController::class, 'store'])->name('orderpost.store');
});



Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('admin');

    Route::controller(ProductController::class)->prefix('products')->middleware('admin')->name('products.')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');

    });


    Route::controller(CategorieController::class)->prefix('categories')->middleware('admin')->name('categories.')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');

    });


    Route::controller(AuthorController::class)->prefix('authors')->middleware('admin')->name('authors.')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');

    });



    Route::controller(SettingController::class)->prefix('setting')->middleware('admin')->name('setting.')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::post('/update', 'update')->name('update');

    });


    Route::controller(App\Http\Controllers\Admin\ContactController::class)->prefix('contact')->middleware('admin')->name('contact.')->group(function () {

        Route::get('/', 'index')->name('index');

        Route::get('/read/{id}', 'read')->name('read');

        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        
    });

});



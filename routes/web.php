<?php

use App\Http\Controllers\Admin\About\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\NewInfo\NewInfoController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Site\Language\LanguageController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('admin.login')->middleware('checklogin');
Route::post('/admin/login', [AuthController::class, 'postlogin'])->name('admin.postlogin');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::prefix('admin')->middleware('auth:web')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::prefix('/product')->middleware('auth:web')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.home');
        Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
        Route::get('/search', [ProductController::class, 'search'])->name('product.search');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/postcreate', [ProductController::class, 'postcreate'])->name('product.postcreate');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/postedit/{id}', [ProductController::class, 'postedit'])->name('product.postedit');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
        Route::post('/uploads-ckeditor', [ProductController::class, 'ckeditor_image']);
        Route::get('/file-browser', [ProductController::class, 'file_browser']);
    });
    Route::prefix('/category')->middleware('auth:web')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.home');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/postcreate', [CategoryController::class, 'postcreate'])->name('category.postcreate');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/postedit/{id}', [CategoryController::class, 'postedit'])->name('category.postedit');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    });
    Route::prefix('/user')->middleware('auth:web')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('useradminsite.home');
        Route::get('/detail/{id}', [UserController::class, 'detail'])->name('useradminsite.detail');
        Route::get('/search', [UserController::class, 'search'])->name('useradminsite.search');
        Route::get('/create', [UserController::class, 'create'])->name('useradminsite.create');
        Route::post('/postcreate', [UserController::class, 'postcreate'])->name('useradminsite.postcreate');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('useradminsite.edit');
        Route::post('/postedit/{id}', [UserController::class, 'postedit'])->name('useradminsite.postedit');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('useradminsite.delete');
    });
    Route::prefix('/about')->middleware('auth:web')->group(function () {
        Route::post('/uploads-ckeditor', [AboutController::class, 'ckeditor_image']);
        Route::get('/file-browser', [AboutController::class, 'file_browser']);
        Route::get('/', [AboutController::class, 'index'])->name('about.home');
        Route::get('/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/postcreate', [AboutController::class, 'postcreate'])->name('about.postcreate');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::post('/postedit/{id}', [AboutController::class, 'postedit'])->name('about.postedit');
        Route::get('/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');
    });
    Route::prefix('/new')->middleware('auth:web')->group(function () {
        Route::post('/uploads-ckeditor', [NewInfoController::class, 'ckeditor_image']);
        Route::get('/file-browser', [NewInfoController::class, 'file_browser']);
        Route::get('/', [NewInfoController::class, 'index'])->name('new.home');
        Route::get('/create', [NewInfoController::class, 'create'])->name('new.create');
        Route::post('/postcreate', [NewInfoController::class, 'postcreate'])->name('new.postcreate');
        Route::get('/edit/{id}', [NewInfoController::class, 'edit'])->name('new.edit');
        Route::post('/postedit/{id}', [NewInfoController::class, 'postedit'])->name('new.postedit');
        Route::get('/delete/{id}', [NewInfoController::class, 'delete'])->name('new.delete');
    });
    
});


Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/search', [SiteController::class, 'search'])->name('searchsite.home');
Route::get('/about', [SiteController::class, 'about'])->name('aboutsite.home');
Route::get('/list-product', [SiteController::class, 'listprd'])->name('listproductsite.home');
Route::get('/list-tin-tuc', [SiteController::class, 'listnew'])->name('listtintuc.home');
Route::get('/detail/{id}', [SiteController::class, 'detail'])->name('detailsite.home');
Route::get('/news/{id}', [SiteController::class, 'new'])->name('newsite.home');
Route::get('/language/{language}', [LanguageController::class, 'index'])->name('language');



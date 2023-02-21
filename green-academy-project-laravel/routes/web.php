<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\CategoryForumController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PostForumController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\HistoryPurchaseController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CategorySupportController;
use App\Http\Controllers\Admin\SupportController;

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\VertifyMailController;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\CreateUserController;

//User
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'templateLogin'])->name('templateLogin');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//User
Route::get('home', [HomeController::class, 'home'])->name('home');

//Admin
Route::middleware('check_login_admin')->group(function () {
    Route::get('admin/index', [AdminController::class, 'adminIndex'])->name('adminIndex');
        
    Route::get('send-vertify-mail', [VertifyMailController::class, 'sendVertifyMail'])->name('sendVertifyMail');

    // Route::post('get-skill', [ClassController::class, 'getSkill'])->name('getSkill');
        
    // Route::post('get-class', [ItemController::class, 'getClass'])->name('getClass');

    Route::post('get-price', [CartController::class, 'getPrice'])->name('getPrice');
    Route::post('get-discount', [CartController::class, 'getDiscount'])->name('getDiscount');

    Route::post('get-billdetail', [BillController::class, 'getCart'])->name('getCart');
    Route::prefix('admin')->name('admin.')->group(function () {

            Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('item')->name('item.')->controller(ItemController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('category-forum')->name('category-forum.')->controller(CategoryForumController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('payment')->name('payment.')->controller(PaymentController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('skill')->name('skill.')->controller(SkillController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('class')->name('class.')->controller(ClassController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('show/{id}', 'show')->name('show');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('post-forum')->name('post-forum.')->controller(PostForumController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('show/{id}', 'show')->name('show');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('bill')->name('bill.')->controller(BillController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('history-purchase')->name('history-purchase.')->controller(HistoryPurchaseController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('news')->name('news.')->controller(NewsController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('category-support')->name('category-support.')->controller(CategorySupportController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });

            Route::prefix('support')->name('support.')->controller(SupportController::class)->group(function () {    
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::get('delete/{id}', 'delete')->name('delete');
            });
            
    });
});

Route::get('create-user/create', [CreateUserController::class, 'create'])->name('create');
Route::post('create-user/store', [CreateUserController::class, 'store'])->name('store');


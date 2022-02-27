<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FootwearController;
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('layout.start');
});
Route::get('/search', [SearchController::class, 'search']);

Route::resource("/start",StartController::class);
Route::resource("/men",MenController::class);
Route::resource("/women",WomenController::class);
Route::resource("/sales",SalesController::class);
Route::resource("/footwear",FootwearController::class);
Route::resource("/accessories",AccessoriesController::class);
Route::resource("/blog",BlogController::class);
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list')->middleware('auth');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');




Route::resources([
    "mens"=>MenController::class,
    "womens"=>WomenController::class,
]);
Auth::routes();


Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::resource("/users",UsersController::class);
    Route::resource("/dashboard",DashboardController::class);
    });


Route::get('login/facebook',[LoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[LoginController::class,'handleFacebookCallback']);

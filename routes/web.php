<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LienHeController;
use \App\Http\Controllers\AccountController;

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
    return view('customer.content');
});
Route::middleware('auth')->group(function () {
    Route::view('/admin/home', 'admin.home')->name('admin.home');
});

// Customer routes

Route::get('/customer/index', [\App\Http\Controllers\UserController::class,'showdata'])->name('customer.content');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'viewLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


// khi vào link liên hệ sẽ vào LienHeController , function showData
Route::get('/admin/account',[AccountController::class, "showAcc"]);

Route::get('/admin/addAccount',[AccountController::class, "addAcc"]);
Route::post("/accountSave", [AccountController::class, "save"]);
Route::get("/account_delete/{id}", [AccountController::class, "delete"]);
Route::get("/account_update/{id}", [AccountController::class, "update"]);
Route::post("/accountSaveUpdate", [AccountController::class, "saveUpdate"]);


Route::get("/admin/product", [\App\Http\Controllers\ProductController::class, "getAll"]);
Route::get("/admin/productAdd", [\App\Http\Controllers\ProductController::class, "add"]);
Route::post("/productSave", [\App\Http\Controllers\ProductController::class, "save"]);
Route::get("/product_delete/{id}", [\App\Http\Controllers\ProductController::class, "delete"]);
Route::get("/product_update/{id}", [\App\Http\Controllers\ProductController::class, "update"]);
Route::post("/productSaveUpdate", [\App\Http\Controllers\ProductController::class, "saveUpdate"]);

Route::get("/admin/contract", [\App\Http\Controllers\ProductController::class, "viewContract"]);

Route::get("/customer/{id}", [\App\Http\Controllers\CategoryController::class, "category"]);
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get("/customer/category/{id}", [\App\Http\Controllers\CategoryController::class, "viewCategory"]);

Route::get("/register", [\App\Http\Controllers\AuthController::class, "viewRegister"])->name("register");
Route::post("/saveRegister", [\App\Http\Controllers\AuthController::class, "saveRegister"]);

Route::get("/customer/detail/{id}", [\App\Http\Controllers\UserController::class,'detail'])->name('detail');


Route::get("/customer/order/{id}", [\App\Http\Controllers\UserController::class,'showForm'])->name('order');
Route::middleware(['auth'])->group(function () {
    Route::post("/customer/order", [\App\Http\Controllers\UserController::class,'store'])->name('saveorder');
}) ;
Route::get("/admin/orderDetail", [\App\Http\Controllers\OrderController::class,"showOrder"])->name('orderDetail');

Route::get("/order_delete/{id}", [\App\Http\Controllers\OrderController::class, "delete"]);

Route::get("/order_update/{id}", [\App\Http\Controllers\OrderController::class, "formUpdate"]);

Route::post("/order_saveUpdate", [\App\Http\Controllers\OrderController::class, "saveUpdate"]);

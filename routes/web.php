<?php

use App\Models\Car;
use App\Models\Debt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ResellerController;


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

Route::get('/', [LandingController::class, 'index']);
// Route::get('/', function () {
//     return view('frontend.index');
// });


Route::get('/game_login', [AuthController::class, 'login']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'adminLogin'])->name('admin. login')->middleware('guest');
// Route::get('/admin/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/dashboard', function () {

    return view('dashboard');
})->name('dashboard')->middleware(['auth', 'verified']);
Route::post('debt_register', [DebtController::class, 'store']);
Route::get('debt_delete/{id}', [DebtController::class, 'delete']);
Route::get('debt_edit/{id}', [DebtController::class, 'show']);
Route::put('debt_update/{id}', [DebtController::class, 'update']);





//user
Route::get('user', [UserController::class, 'user_register']);
Route::post('User_Register', [UserController::class, 'user_store']);
Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);
Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);
Route::get('/userShow/{id}', [UserController::class, 'userShow']);


//Frontend Login
// Route::get('purchase', [PurchaseController::class, 'getrole']);
Route::get('/show-form', [PurchaseController::class, 'getrole']);
Route::post('/submit-form', [PurchaseController::class, 'submitForm'])->name('submit-form');
Route::post('/order-form', [PurchaseController::class, 'orderForm'])->name('order-form');




//reseller
Route::get('/reseller', [ResellerController::class, 'reseller']);
Route::post('/reseller_store', [ResellerController::class, 'reseller_store']);

Route::post('/reseller_store', [ResellerController::class, 'reseller_store']);

Route::get('/resellerHistory/{id}', [ResellerController::class, 'resellerHistory']);

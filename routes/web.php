<?php

use App\Http\Controllers\UserLoginController;
use App\Models\Car;
use App\Models\Debt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\EndUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LandingPurchaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\UploadCoinHistoryController;
use App\Http\Controllers\UserPurchaseController;
use App\Http\Controllers\UserResellerController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'is_admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';






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


// Route::get('/', function () {
//     return view('frontend.index');
// });
// This route is accessible to guests
Route::middleware('guest')->group(function () {
    // Define your routes here
    Route::get('/', [LandingController::class, 'index']);
    Route::get('/show-form', [EndUserController::class, 'getrole']);
    Route::post('/user-submit-forms', [EndUserController::class, 'submitForm'])->name('user-submit-forms');
    Route::post('/user-order-forms', [EndUserController::class, 'orderForm'])->name('user-order-forms');
    Route::post('/purchase', [EndUserController::class, 'store'])->name('purchase');
});




// Route::get('/dashboard', function () {

//     return view('dashboard');
// })->name('dashboard')->middleware(['auth', 'verified']);
// Route::post('debt_register', [DebtController::class, 'store']);
// Route::get('debt_delete/{id}', [DebtController::class, 'delete']);
// Route::get('debt_edit/{id}', [DebtController::class, 'show']);
// Route::put('debt_update/{id}', [DebtController::class, 'update']);






Route::middleware('auth')->group(
    function () {
        Route::get('/show-form', [PurchaseController::class, 'getrole'])->middleware('is_admin');
        Route::post('/submit-form', [PurchaseController::class, 'submitForm'])->name('submit-form')->middleware('is_admin');
        Route::post('/order-form', [PurchaseController::class, 'orderForm'])->name('order-form')->middleware('is_admin');
        Route::get('/endUser', [PurchaseController::class, 'endUser'])->name('endUser')->middleware('is_admin');




        //UserPurchase
        Route::get('/user_page', [UserLoginController::class, 'index'])->name('user_page');
        Route::get('/show-form', [UserPurchaseController::class, 'getrole']);
        Route::post('/submit-forms', [UserPurchaseController::class, 'submitForm'])->name('submit-forms');
        Route::post('/order-forms', [UserPurchaseController::class, 'orderForm'])->name('order-forms');




        //UserReseller
        Route::get('/resellers', [UserResellerController::class, 'reseller'])->name('resellers');
        Route::post('/reseller_stores', [UserResellerController::class, 'reseller_store']);
        Route::post('/reseller_stores', [UserResellerController::class, 'reseller_store']);
        Route::get('/resellerHistorys/{id}', [UserResellerController::class, 'resellerHistory']);
        Route::get('/session_clears/{id}', [UserResellerController::class, 'session_clear'])->name('session_clears');


        //user
        // Route::get('user', [UserController::class, 'user_register']);
        // Route::post('User_Register', [UserController::class, 'user_store']);
        // Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);
        // Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);
        // Route::get('/userShow/{id}', [UserController::class, 'userShow']);


        //Frontend Login
        // Route::get('purchase', [PurchaseController::class, 'getrole']);
        Route::middleware(['auth', 'verified', 'is_admin'])->group(function () {
            Route::get('user', [UserController::class, 'user_register'])->name('user');
            Route::post('User_Register', [UserController::class, 'user_store']);
            Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);
            Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);
            Route::get('/userShow/{id}', [UserController::class, 'userShow']);
            Route::post('/update_user/{id}', [UserController::class, 'update_user']); //change Reseller
            Route::post('change/{id}', [UserController::class, 'change'])->name('change');

            //Upload Coin
            Route::get('upload_coin/{id}', [UserController::class, 'upload_coin']);
            Route::post('store_coin/{id}', [UserController::class, 'store_coin']);
            Route::get('history/{id}', [UploadCoinHistoryController::class, 'show']);
            //Zone
            Route::get('/zone', [ZoneController::class, 'index']);
            Route::post('/zone_register', [ZoneController::class, 'store']);
            Route::get('zone_edit/{id}', [ZoneController::class, 'edit']);
            Route::post('update_zone/{id}', [ZoneController::class, 'update']);
            Route::get('/delete_zone/{id}', [ZoneController::class, 'delete']);


            //reseller
            Route::get('/reseller', [ResellerController::class, 'reseller']);
            Route::post('/reseller_store', [ResellerController::class, 'reseller_store']);
            Route::post('/reseller_store', [ResellerController::class, 'reseller_store']);
            Route::get('/resellerHistory/{id}', [ResellerController::class, 'resellerHistory']);
            Route::get('/session_clear/{id}', [ResellerController::class, 'session_clear'])->name('session_clear');
        });
    }
);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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
//     // if you don’t put with() here, you will have N+1 query performance problem
//     return view('pages.home');
// });
Route::get('/', [\App\Http\Controllers\AccountController::class, 'homeIndex'])->name('home');

Route::get('/search', [\App\Http\Controllers\SearchController::class,'search'])->name('search');

Route::group(['middleware' => 'auth'], function(){
	Route::get('addnew', function(){
		return view('dashboard');
	})->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    //Route::resource('transactions', TransactionController::class);
    Route::resource('transactions', \App\Http\Controllers\TransactionController::class);
    Route::resource('accounts', \App\Http\Controllers\AccountController::class);

    Route::post('store-vehicle', [App\Http\Controllers\VehicleController::class, 'store'])->name('save-vehicle');
    Route::get('edit-vehicle/{id}', [App\Http\Controllers\VehicleController::class, 'updateView'])->name('edit-vehicle');
    Route::post('update-vehicle/{id}', [App\Http\Controllers\VehicleController::class, 'update'])->name('update-vehicle');
    
});

Route::view('about', 'pages.about')->name('about');

require __DIR__.'/auth.php';
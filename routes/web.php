<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('sign-in', [PageController::class, 'signIn']);
Route::get('sign-up', [PageController::class, 'signUp']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(FundraiseController::class)->group(function() {
    //

    Route::get('fundraise', 'index');
});



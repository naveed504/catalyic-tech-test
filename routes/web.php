<?php

use App\Http\Controllers\Admin\Companies\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Employees\EmployeController;
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




/**
 * Admin Routes
 */
Route::group(['prefix'=>'admin', 'middleware'=>['auth','adminRole']], function(){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('employees', EmployeController::class);
    Route::resource('companies',CompanyController::class);  
});

Route::get('/', function () {
    return redirect()->route('login');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

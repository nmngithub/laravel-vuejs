<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\EmployeeController;


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

Route::get('/customer', function () {
    return view('welcome');
});

Route::get('/company', function () {
    return view('welcome');
});

Route::get('/employee', function () {
    return view('welcome');
});

Route::get('test', function (){
    return view('test');
});

Route::group(['prefix' => 'api'], function (){
   Route::resource('customer', CustomerController::class);
   Route::resource('company', CompanyController::class);
   Route::resource('employee', EmployeeController::class);
});

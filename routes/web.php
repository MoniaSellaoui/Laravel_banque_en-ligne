<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CashierController;

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
//login controller pages
Route::get('/login',[LoginController::class,'login']);

//admin controller pages
Route::get('/admin/home',[AdminController::class, 'home']);
Route::get('/admin/accounts',[AdminController::class, 'accounts']);
Route::get('/admin/addnewaccounts',[AdminController::class, 'addaccounts']);
Route::get('/admin/feedback',[AdminController::class, 'feedback']);
Route::get('/admin/clientdetails',[AdminController::class, 'clientdetails']);
Route::get('/admin/notice',[AdminController::class, 'notice']);

//client controller pages
Route::get('/client/home',[ClientController::class, 'home']);
Route::get('/client/account',[ClientController::class, 'account']);
Route::get('/client/statements',[ClientController::class, 'statements']);
Route::get('/client/fundstransfer',[ClientController::class, 'fundstransfer']);
Route::get('/client/notice',[ClientController::class, 'notice']);
Route::get('/client/feedback',[ClientController::class, 'feedback']);

//cashier controller pages
Route::get('/cashier/home',[CashierController::class, 'home']);
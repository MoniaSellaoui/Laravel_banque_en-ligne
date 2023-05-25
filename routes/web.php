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
Route::post('/login/clientaccess',[LoginController::class,'clientaccess']);
Route::get('/client/clientlogout',[LoginController::class,'clientlogout']);
Route::post('/login/cashieraccess',[LoginController::class,'cashieraccess']);
Route::get('/cashier/cashierlogout',[LoginController::class,'cashierlogout']);

//admin controller pages
Route::get('/admin/home',[AdminController::class, 'home']);
Route::get('/admin/accounts',[AdminController::class, 'accounts']);
Route::get('/admin/addnewaccounts',[AdminController::class, 'addaccounts']);
Route::get('/admin/feedback',[AdminController::class, 'feedback']);
Route::get('/admin/clientdetails/{id}',[AdminController::class, 'clientdetails']);
Route::get('/admin/notice/{id}',[AdminController::class, 'notice']);
Route::post('/admin/addcashier',[AdminController::class, 'addcashier']);
Route::post('/admin/updatecashier',[AdminController::class, 'updatecashier']);
Route::get('/admin/deletecashier/{id}',[AdminController::class, 'deletecashier']);
Route::post('/admin/saveaccount',[AdminController::class, 'saveaccount']);
Route::get('/admin/deleteclient/{id}',[AdminController::class, 'deleteclient']);
Route::post('/admin/sendnotice',[AdminController::class, 'sendnotice']);
Route::get('/admin/deletemessage/{id}',[AdminController::class, 'deletemessage']);

//client controller pages
Route::get('/client/home',[ClientController::class, 'home']);
Route::get('/client/account',[ClientController::class, 'account']);
Route::get('/client/statements',[ClientController::class, 'statements']);
Route::get('/client/fundstransfer',[ClientController::class, 'fundstransfer']);
Route::get('/client/notice',[ClientController::class, 'notice']);
Route::get('/client/feedback',[ClientController::class, 'feedback']);
Route::post('/client/clientmessage',[ClientController::class, 'clientmessage']);
Route::post('/client/clienttransfer',[ClientController::class, 'clienttransfer']);
Route::post('/client/transfer',[ClientController::class, 'transfer']);

//cashier controller pages
Route::get('/cashier/home',[CashierController::class, 'home']);
Route::post('/cashier/clienttransfer',[CashierController::class, 'clienttransfer']);
Route::get('/cashier/transaction',[CashierController::class, 'transaction']);
Route::post('/cashier/clientwithdraw',[CashierController::class, 'clientwithdraw']);
Route::post('/cashier/clientdeposit',[CashierController::class, 'clientdeposit']);
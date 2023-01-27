<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;

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
/*
Route::get('/', function () {
    return view('welcome');
}); */


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),

    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/',[HomeController::class,'home']);
Route::get('/redirects',[HomeController::class,'redirects']);
Route::get('/showcart',[HomeController::class,'showcart']);
Route::get('/home',[HomeController::class,'home']);
Route::get('/users',[adminController::class,'user']);
Route::get('/deleteuser/{id}',[adminController::class,'deleteuser']);
Route::get('/product',[adminController::class,'product']);
Route::post('/products',[adminController::class,'products']);
Route::get('/prd',[productController::class,'prd']);
Route::post('/addcart/{id}',[productController::class,'addcart'])->name('addcart');
Route::get('/delete/{id}',[productController::class,'deletecart']);
Route::post('/order',[productController::class,'order']);
Route::post('/search',[productController::class,'search']);
Route::get('/agent',[adminController::class,'agent']);
Route::post('/addagent',[adminController::class,'addagent']);
Route::any('/payments',[adminController::class,'paid']);
Route::get('/usersale',[HomeController::class,'usersale']);
Route::post('/salerequest',[HomeController::class,'salerequest']);
Route::get('/status',[HomeController::class,'status']);

Route::get('/agenta',[HomeController::class,'agenta']);
Route::get('/request',[HomeController::class,'request']);
Route::post('/postreq',[HomeController::class,'postreq']);
Route::get('/customerrequest',[adminController::class,'customerrequest']);

Route::get('/approve/{id}',[adminController::class,'approve']);
Route::get('/approve/{id}',[adminController::class,'cancel']);


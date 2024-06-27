<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ConversationController;

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

/* //7.3|^8.0*/
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
Route::get('/video/{id}',[adminController::class,'video']);
Route::get('/hey',[adminController::class,'hey'])->name('hey');

Route::get('/showcart',[HomeController::class,'showcart']);
//Route::get('/home',[HomeController::class,'home']);
Route::get('/users',[adminController::class,'user']);
Route::get('/deleteuser/{id}',[adminController::class,'deleteuser']);
Route::get('/product',[adminController::class,'product']);
Route::post('/requestsale',[adminController::class,'requestsale']);
Route::post('/products',[adminController::class,'products']);
Route::get('/prd',[productController::class,'prd']);
Route::post('/addcart/{id}',[productController::class,'addcart'])->name('addcart');
Route::get('/delete/{id}',[productController::class,'deletecart']);
Route::post('/order',[productController::class,'order']);
Route::post('/search',[productController::class,'search']);
Route::get('/agent',[adminController::class,'agent']);
Route::get('/listing',[adminController::class,'listing']);
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
Route::get('/cancel/{id}',[adminController::class,'cancel']);
Route::delete('/usercancel/{id}',[adminController::class,'usercancel'])->name('usercancel');
Route::post('/ordermail',[adminController::class,'ordermail']);
Route::post('/confirmationmail',[adminController::class,'confirmationmail']);
Route::get('/sendnotification',[HomeController::class,'sendnotification']); //requestsale
Route::get('/editproduct/{id}',[adminController::class,'editproduct']);
Route::post('/updateproduct/{id}',[adminController::class,'updateproduct']);
Route::get('/edituser/{id}',[adminController::class,'edituser']);
Route::post('/updateuser/{id}',[adminController::class,'updateuser']);


//Route::post('/updateproduct/{id}',[adminController::class,'updateproduct']);
Route::get('/prod',[HomeController::class,'prod']); //requestsale
Route::get('/people',[adminController::class,'people']); //downloadPDF
Route::get('/downloadPDF',[adminController::class,'downloadPDF'])->name('downloadPDF'); //downloadPDF
Route::get('/editsale/{id}',[adminController::class,'editsale']);//editsale
Route::post('/updatesale/{id}',[adminController::class,'updatesale']);

Route::get('/inbox', [ConversationController::class, 'index'])->name('conversation.index');
Route::get('/conversation/{id}', [ConversationController::class, 'show'])->name('conversation.show');
Route::post('/conversation', [ConversationController::class, 'store'])->name('conversation.store');

// routes/web.php

Route::post('/search1', [ProductController::class, 'search1'])->name('search1');
Route::post('/search',[productController::class,'search']);
Route::post('/addLocation',[adminController::class,'addLocation']);
Route::get('/getLocationView',[adminController::class,'getLocationView']);

//chatifyNew
Route::get('/chat/user', [ConversationController::class,'userChat'])->name('user.chat');
Route::get('/chat/agent', [ConversationController::class,'agentChat'])->name('agent.chat');












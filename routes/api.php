<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
//get all users
Route::get('/users',[App\Http\Controllers\UserController::class,'getUser']);
//get specifec user
Route::get('/users/{id}',[App\Http\Controllers\UserController::class,'getUserById']);
//add user
Route::post('addUser',[App\Http\Controllers\UserController::class,'addUser']);
//update user
Route::put('updateUser/{id}',[App\Http\Controllers\UserController::class,'updateUser']);
//delete user
Route::delete('deleteUser/{id}',[App\Http\Controllers\UserController::class,'deleteUser']);


//get all Benefactors
Route::get('/benefactor',[App\Http\Controllers\BenefactorController::class,'getBenefactor']);
//get specifec Benefactor
Route::get('/benefactor/{id}',[App\Http\Controllers\BenefactorController::class,'getBenefactorById']);
//add Benefactor
Route::post('/addBenefactor',[App\Http\Controllers\BenefactorController::class,'addBenefactor']);
//update Benefactor
Route::PUT('updateBenefactor/{id}',[App\Http\Controllers\BenefactorController::class,'updateBenefactor']);
//delete Benefactor
Route::delete('deleteBenefactor/{id}',[App\Http\Controllers\BenefactorController::class,'deleteBenefactor']);

//get all Beneficiarys
Route::get('/beneficiary',[App\Http\Controllers\BeneficiaryController::class,'getBeneficiary']);
//get specifec Beneficiary
Route::get('/beneficiary/{id}',[App\Http\Controllers\BeneficiaryController::class,'getBeneficiaryById']);
//add Beneficiary
Route::post('addBeneficiary',[App\Http\Controllers\BeneficiaryController::class,'addBeneficiary']);
//update Beneficiary
Route::put('updateBeneficiary/{id}',[App\Http\Controllers\BeneficiaryController::class,'updateBeneficiary']);
//delete Beneficiary
Route::delete('deleteBeneficiary/{id}',[App\Http\Controllers\BeneficiaryController::class,'deleteBeneficiary']);

//get all Exchangetransactions
Route::get('/exchangetransaction',[App\Http\Controllers\ExchangetransactionController::class,'getExchangetransaction']);
//get specifec Exchangetransaction
Route::get('/exchangetransaction/{id}',[App\Http\Controllers\ExchangetransactionController::class,'getExchangetransactionById']);
//add Exchangetransaction
Route::post('addExchangetransaction',[App\Http\Controllers\ExchangetransactionController::class,'addExchangetransaction']);
//update Exchangetransaction
Route::put('updateExchangetransaction/{id}',[App\Http\Controllers\ExchangetransactionController::class,'updateExchangetransaction']);
//delete Exchangetransaction
Route::delete('deleteExchangetransaction/{id}',[App\Http\Controllers\ExchangetransactionController::class,'deleteExchangetransaction']);

Route::get('/exchange',[App\Http\Controllers\ExchangetransactionController::class,'getExchanges']);

//get all Revenuetransactions
Route::get('/revenuetransaction',[App\Http\Controllers\RevenuetransactionController::class,'getRevenuetransaction']);
//get specifec Revenuetransaction
Route::get('/revenuetransaction/{id}',[App\Http\Controllers\RevenuetransactionController::class,'getRevenuetransactionById']);
//add Revenuetransaction
Route::post('addRevenuetransaction',[App\Http\Controllers\RevenuetransactionController::class,'addRevenuetransaction']);
//update Revenuetransaction
Route::put('updateRevenuetransaction/{id}',[App\Http\Controllers\RevenuetransactionController::class,'updateRevenuetransaction']);
//delete Revenuetransaction
Route::delete('deleteRevenuetransaction/{id}',[App\Http\Controllers\RevenuetransactionController::class,'deleteRevenuetransaction']);

Route::get('/revenue',[App\Http\Controllers\RevenuetransactionController::class,'getRevenues']);
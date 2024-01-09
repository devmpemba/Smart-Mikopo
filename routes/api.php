<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanTypesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::get('/loans', [App\Http\Controllers\LoansController::class]);

//Route::get('/loans', [App\Http\Controllers\LoansController::class, 'index']);

Route::get('message', function() {
    return response()->json([
        'message' => 'Hello',
        'status_code' =>  200
    ]);
});

// Route::get('loan-type-list', function() {
//     return response()->json([
//         'message' => 'Loan Types List',
//         'status_code' =>  200
//     ]);
// });

//Route::get('loan-type-list', [LoanTypesController::class,'index']);





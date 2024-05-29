<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReportController;

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

Route::post('app/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'app'], function (){
    Route::post('/logout', [AuthController::class, 'logout']);


    Route::get('monitor-pressure',[ReportController::class, 'monitorPressure']);
    Route::get('quantity-monitoring',[ReportController::class, 'quantityMonitoring']);
});




//Route::post('app/check-login', function (Request $request){
//
//    if ($request->get('token') == 'xxxxxxxxxxxxxxxxx123') {
//        return response()->json([
//            'success' => true,
//        ]);
//    }
//
//    return response()->json([
//        'success' => false,
//        'message' => 'Token hết hạn'
//    ]);
//});
//
//Route::get('pressure', [\App\Http\Controllers\TestController::class, 'pressure']);
//Route::get('yield', [\App\Http\Controllers\TestController::class, 'yield']);


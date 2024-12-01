<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\ReportV2Controller;

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

//Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'app'], function (){
//    Route::get('/check-login', [AuthController::class, 'checkLogin']);
//    Route::post('/logout', [AuthController::class, 'logout']);
//
//    Route::get('/quantity-monitoring/detail', [ReportController::class, 'quantityMonitoringDetail']);
//    Route::get('monitor-pressure',[ReportController::class, 'monitorPressure']);
//    Route::get('monitor-pressure/detail',[ReportController::class, 'monitorPressureDetail']);
//
//    Route::get('quantity-monitoring',[ReportController::class, 'quantityMonitoring']);
//    Route::get('sensor',[ReportController::class, 'sensor']);
//    Route::get('output-chart',[ReportController::class, 'outputChart']);
//});

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'app'], function (){
    Route::get('/check-login', [AuthController::class, 'checkLogin']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('monitor-pressure',[ReportV2Controller::class, 'monitorPressure']);
    Route::get('monitor-pressure/detail',[ReportV2Controller::class, 'monitorPressureDetail']);


    Route::get('quantity-monitoring',[ReportV2Controller::class, 'quantityMonitoring']);
    Route::get('/quantity-monitoring/detail', [ReportV2Controller::class, 'quantityMonitoringDetail']);

    Route::get('sensor',[ReportV2Controller::class, 'sensor']);
    Route::get('output-chart',[ReportV2Controller::class, 'outputChart']);
});

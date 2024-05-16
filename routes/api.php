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

Route::post('app/login', function (Request $request){

    if ($request->get('username') == 'admin@iotsmart.vn' && $request->get('password') == '123456@') {
        return response()->json([
            'success' => true,
            'token' => 'xxxxxxxxxxxxxxxxx123'
        ]);
    }

   return response()->json([
       'success' => false,
       'message' => 'Thông tin đăng nhập không chính xác'
   ]);
});

Route::post('app/check-login', function (Request $request){

    if ($request->get('token') == 'xxxxxxxxxxxxxxxxx123') {
        return response()->json([
            'success' => true,
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Token hết hạn'
    ]);
});


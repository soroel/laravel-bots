<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//telegram webhook
Route::prefix('telegram/webhooks')->group(function() {
    Route::post('inbound', function(Request $request){
        \Log::info($request->all());
    });
});

https://api.telegram.org/bot6325246135:AAHyCpO1nVXnnwmZqUMOdywNCxON1AAr6oU/setWebhook?url=https://4da0-102-140-203-177.ngrok-free.app/api/telegram/webhooks/inbound

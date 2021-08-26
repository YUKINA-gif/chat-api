<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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

Route::get("/chat/{user_id}",[ChatController::class,"get"]);
Route::get("/chat/message/{user_id}", [ChatController::class, "getMessage"]);
Route::post("/chat/message/{user_id}", [ChatController::class, "post"]);
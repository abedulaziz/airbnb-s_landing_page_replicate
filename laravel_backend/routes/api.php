<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StaysController;

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

// categories APIs
Route::get("/get_categories/{categ_id}", [CategoriesController::class, "getCategoriesAndSelectedStays"]);

// stays APIs
Route::get("/get_stays/{stay_id}/favorite", [StaysController::class, "favoriteStay"]);

<?php

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\DataResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DataController;
use App\Http\Controllers\ApiController;

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
Route::get('data1', [ApiController::class, 'index']);
Route::get('data1/{item:slug}', [ApiController::class, 'show']);
// Route::get('data2', [DataController::class, 'all']);

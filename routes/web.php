<?php

use App\Http\Controllers\API\DataController;
use App\Http\Controllers\DashboardActivityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\DashboardItemsController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Resources\DataResource;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ItemController::class, 'index']);
// Route::get('api/data', [DataController::class, 'all']);
// Route::get('api/data1/{id}', function ($id) {
//     return new DataResource(Category::findOrFail($id));
// });
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->middleware('auth');
Route::resource('/dashboard-admin/list-item', DashboardItemsController::class);
Route::resource('/dashboard-admin/list-gallery', DashboardGalleryController::class);
Route::resource('/dashboard-admin/list-activity', DashboardActivityController::class);

// login
Route::get('/dashboard-admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/dashboard-admin/login', [LoginController::class, 'auth']);
Route::post('/dashboard-admin/logout', [LoginController::class, 'logout']);
// register
Route::get('/dashboard-admin/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/dashboard-admin/register', [RegisterController::class, 'store']);

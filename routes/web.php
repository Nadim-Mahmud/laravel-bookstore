<?php

use App\Http\Controllers\crudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [crudController::class, 'showData']);
Route::get('/add-data', [crudController::class, 'addData']);
Route::post('/store-data', [crudController::class, 'storeData']);
Route::get('/edit-data/{id}', [crudController::class, 'editData']);
Route::post('/update-data/{id}', [crudController::class, 'updateData']);
Route::get('/delete-data/{id}', [crudController::class, 'deleteData']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/category", [CategoryController::class, 'index']);
Route::get("/category/create", [CategoryController::class, 'create']);
Route::post("/category/store", [CategoryController::class, 'store']);
Route::get("/category/{id}/edit", [CategoryController::class, 'edit']); //For retrieving a particular category
Route::put("/category/{id}/update", [CategoryController::class, 'update']); //For updating a particular category
Route::get("/category/{id}/delete", [CategoryController::class, 'delete']); 

Route::get('/', function () {
    return view('welcome');
});

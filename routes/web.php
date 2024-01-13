<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tuwaiq;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-items', function () {
    return view('create-product');
});
Route::post('/save-items', [tuwaiq::class,'saveProduct'])->name('save-items');


Route::get('/ramia',[tuwaiq::class,'getRamia']);
Route::get('/products',[tuwaiq::class,'getProducts']);
Route::get('/vat/{total}',[tuwaiq::class,'vat'])->name('vat');
Route::post('/printvalue',[tuwaiq::class,'printValue'])->name('xyz');
Route::get('/get-result/{degree}', [tuwaiq::class, 'getResult']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

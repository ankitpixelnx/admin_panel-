<?php

use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;


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

Route::get('/',[Homecontroller::class,'index']);

Route::get('/redirect',[Homecontroller::class,'redirect']);
Route::get('/view_category',[Admincontroller::class,'view_category']);
Route::post('/add_category',[Admincontroller::class,'add_category']);
Route::get('/delete_category/{id}',[Admincontroller::class,'delete_category']);
Route::get('/view_product',[Admincontroller::class,'view_product']);
Route::post('/add_product',[Admincontroller::class,'add_product']);
Route::get('/show_product',[Admincontroller::class,'show_product']);
Route::get('/delete_product/{id}',[Admincontroller::class,'delete_product']);
Route::get('/update_product/{id}',[Admincontroller::class,'update_product']);

Route::post('/update_details/{id}',[Admincontroller::class,'update_details']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


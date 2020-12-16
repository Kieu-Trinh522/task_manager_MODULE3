<?php

use App\Http\Controllers\CustomerController;
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
Route::get('index',function (){
return view('modules.customers.index');
});

Route::prefix('customer')->group(function (){
    Route::get('/',[CustomerController::class,'index'])->name('customer.index');
    Route::get('/add',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/add',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/edit/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/delete/{id}',[CustomerController::class,'destroy'])->name('customer.destroy');
});


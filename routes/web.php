<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::group(['middleware' => ['auth'], ], function() {


Route::get('contacts/create',[ContactController::class,'create'])->name('contact.create');
Route::post('contacts/create',[ContactController::class,'store'])->name('contact.store');  
Route::get('contacts/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
Route::put('contacts/update/{id}',[ContactController::class,'update'])->name('contact.update');
Route::delete('contacts/delete/{id}',[ContactController::class,'destroy'])->name('contact.destroy');

});

Route::get('/',[ContactController::class,'index'])->name('contact.index');

//Route::get('/', function () {
//    return view('auth.register');
//});

Auth::routes();

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register;
use App\Http\Controllers\controllerlogin;
use App\Http\Controllers\Userauth;



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

/*Route::get('/', function () {
   // return view('welcome');
    return view('reg');
});*/
//Route::get('/home', [register::class,'home'])->name('home');
Route::any('/loginauth', [controllerlogin::class,'loginnet'])->name('loginnet');
Route::post('/loginuser', [Userauth::class,'userlogin'])->name('loginuser');

Route::get('/', [register::class,'reg'])->name('reg');
Route::post('/store', [register::class,'form'])->name('form');
Route::any('/login', [controllerlogin::class,'loginview'])->name('login');
Route::get('/loginnew', [controllerlogin::class,'loginnewview'])->name('loginnewview');

Route::post('/loginform', [controllerlogin::class,'login'])->name('loginform');
Route::get('/index', [register::class,'index'])->name('index');
Route::delete('/delete/{id}', [register::class,'delete'])->name('delete');
Route::get('/edit/{id}', [register::class,'edit'])->name('edit');
Route::get('/logout', [controllerlogin::class,'logout'])->name('logout');
Route::patch('/update/{id}', [register::class,'update'])->name('update');










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

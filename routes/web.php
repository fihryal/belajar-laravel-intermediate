<?php

use App\Notifications\NewVisitor;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\HomeController;



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

    
    // return dd(App('hello'),App('hello'));
});

// app()->bind('hello',function(){
//     return new \App\Data\Tabungan();})
// ;

// app()->singleton('hello',function(){
//     return new \App\Data\Tabungan();})
// ;

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
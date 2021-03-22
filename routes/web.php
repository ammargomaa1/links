<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use App\Models\Link;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('home');
});
// /dashboard
Route::group(['middleware'=>'auth' , 'prefix'=>'dashboard'],function(){
    // /dashboard/links
    Route::get('/links' , [LinkController::class,'index']);
    Route::get('/links/new' , [LinkController::class,'create']);
    Route::post('/links/new' , [LinkController::class,'store']);
    Route::get('/links/{link}' , [LinkController::class,'edit']);
    Route::post('/links/{link}' , [LinkController::class,'update']);
    Route::delete('/links/{link}' , [LinkController::class,'destroy']);

    // User Routes
    Route::get('/settings' , [UserController::class,'edit']);
    Route::post('/settings' , [UserController::class,'update']);

});

Route::post('/visit/{link}', [VisitController::class,'store']);

//Laravel-links.com/username

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{user}',[UserController::class,'show']);

<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\homeControl;
use App\HTTP\Controllers\adminController;

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

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('backhome',[adminController::class,'backHome']);
Route::get('staffhome',[homeControl::class,'staffHome']);
Route::get('/',[homeControl::class,'index']);
Route::get('/redirect',[homeControl::class,'redirectFunct']);
Route::get('/staffmember',[adminController::class,'staffes']);
Route::get('/projects',[adminController::class,'project']);
Route::get('/addresearch',[adminController::class,'adding']);
Route::get('/projectsstaff',[homeControl::class,'projectuser']);
Route::POST('/addres',[adminController::class,'AddRes']);
Route::get('proDetails/{id}',[homeControl::class,'projectDetails']);
Route::POST('/updateres',[homeControl::class,'UPDATEresearch']);
Route::get('/deleteuser/{id}',[adminController::class,'deleteuser']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

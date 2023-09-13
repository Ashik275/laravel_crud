<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;

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
Route::get('/',[StudentController::class,'addStudent'])->name('home');
Route::get('/add/student',[StudentController::class,'addStudent'])->name('add-student');
Route::post('/store',[StudentController::class,'store'])->name('store');
Route::get('/manage/student',[StudentController::class,'manageStudent'])->name('manage-student');
Route::get('/edit/student/{id}',[StudentController::class,'edit'])->name('edit');
Route::post('/update',[StudentController::class,'update'])->name('update');
//Route::get('/delete/student/{id}',[StudentController::class,'deleteInfo'])->name('delete');
Route::post('/delete/student',[StudentController::class,'deleteInfo'])->name('delete');


Route::resources(['departments'=>DepartmentController::class]);
Route::resources(['sessions'=>SessionController::class]);

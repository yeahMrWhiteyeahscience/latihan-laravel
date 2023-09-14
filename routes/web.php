<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/Students', [StudentController::class, 'index']);
Route::get('/Students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');;
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');

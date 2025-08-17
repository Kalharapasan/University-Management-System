<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', action: function () {
    return view('layout');
});



//STUDENT ROUTES
Route::get('student', [StudentController::class, 'index'])->name('students');
Route::get('student/creat', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('student/{id}', [StudentController::class, 'show'])->name('student.show');
Route::get('student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');


//TEACHER ROUTES
Route::get('teacher', [TeacherController::class, 'index'])->name('teachers');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('teacher/{id}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('teacher/{id}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

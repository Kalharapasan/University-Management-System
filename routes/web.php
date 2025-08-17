<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\BatchesController;
use App\Http\Controllers\EnrollmentController;

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

//COURSE ROUTES
Route::get('course', [CoursesController::class, 'index'])->name('courses');
Route::get('course/create', [CoursesController::class, 'create'])->name('course.create');
Route::post('/course', [CoursesController::class, 'store'])->name('course.store');
Route::get('course/{id}', [CoursesController::class, 'show'])->name('course.show');
Route::get('course/{id}/edit', [CoursesController::class, 'edit'])->name('course.edit');
Route::put('course/{id}', [CoursesController::class, 'update'])->name('course.update');
Route::delete('course/{id}', [CoursesController::class, 'destroy'])->name('course.destroy');

//BATCHES ROUTES
Route::get('batch', [BatchesController::class, 'index'])->name('batches');
Route::get('batch/create', [BatchesController::class, 'create'])->name('batch.create');
Route::post('/batch', [BatchesController::class, 'store'])->name('batch.store');
Route::get('batch/{id}', [BatchesController::class, 'show'])->name('batch.show');
Route::get('batch/{id}/edit', [BatchesController::class, 'edit'])->name('batch.edit');
Route::put('batch/{id}', [BatchesController::class, 'update'])->name('batch.update');
Route::delete('batch/{id}', [BatchesController::class, 'destroy'])->name('batch.destroy');

//ENROLLMENT ROUTES
Route::get('enrollment', [EnrollmentController::class, 'index'])->name('enrollments');
Route::get('enrollment/create', [EnrollmentController::class, 'create'])->name('enrollment.create');
Route::post('/enrollment', [EnrollmentController::class, 'store'])->name('enrollment.store');
Route::get('enrollment/{id}', [EnrollmentController::class, 'show'])->name('enrollment.show');
Route::get('enrollment/{id}/edit', [EnrollmentController::class, 'edit'])->name('enrollment.edit');
Route::put('enrollment/{id}', [EnrollmentController::class, 'update'])->name('enrollment.update');
Route::delete('enrollment/{id}', [EnrollmentController::class, 'destroy'])->name('enrollment.destroy');

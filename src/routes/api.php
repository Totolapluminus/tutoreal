<?php

use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\LessonController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('users', UserController::class)->except('index');

Route::apiResource('courses', CourseController::class);

Route::get('api/courses/{course}/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');
Route::post('api/courses/{course}/lessons', [LessonController::class, 'store'])->name('lessons.store');
Route::patch('api/courses/{course}/lessons/{lesson}', [LessonController::class, 'update'])->name('lessons.update');
Route::delete('api/courses/{course}/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');

Route::post('api/courses/{course}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::patch('api/courses/{course}/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('api/courses/{course}/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');


<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index']);

// Route::prefix('/topics')->group(function() {
//     Route::get('/', [TopicController::class, 'index'])->name('topic.index');
//     Route::get('/create', [TopicController::class, 'create'])->name('topic.create');
//     Route::post('/', [TopicController::class, 'store'])->name('topic.store');
//     Route::get('/{topic}', [TopicController::class, 'show'])->name('topic.show');
//     Route::get('/{topic}/edit', [TopicController::class, 'edit'])->name('topic.edit');
//     Route::patch('/{topic}', [TopicController::class, 'update'])->name('topic.update');
//     Route::delete('/{topic}', [TopicController::class, 'delete'])->name('topic.delete');
// });

Route::resource('topics', TopicController::class);

Route::resource('users', UserController::class);

Route::resource('courses', CourseController::class);

Route::get('/courses/{course}/lessons/create', [LessonController::class, 'create'])->name('lessons.create');
Route::get('/courses/{course}/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');
Route::post('/courses/{course}/lessons', [LessonController::class, 'store'])->name('lessons.store');
Route::get('/courses/{course}/lessons/{lesson}/edit', [LessonController::class, 'edit'])->name('lessons.edit');
Route::patch('/courses/{course}/lessons/{lesson}', [LessonController::class, 'update'])->name('lessons.update');
Route::delete('/courses/{course}/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');

Route::get('/courses/{course}/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::get('/courses/{course}/reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
Route::post('/courses/{course}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/courses/{course}/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::patch('/courses/{course}/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/courses/{course}/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');





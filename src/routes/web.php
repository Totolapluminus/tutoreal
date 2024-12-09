<?php

use App\Http\Controllers\AdminController;
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


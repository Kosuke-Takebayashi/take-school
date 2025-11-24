<?php

require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LessonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    if (auth()->check()) { // ログイン済みなら
        return auth()->user()->role === 'teacher'
            ? redirect()->route('tasks.index')                  // 講師ページへ
            : redirect()->route('student.submissions.index');  // 生徒ページへ
    }
    return view('welcome'); // 未ログイン時はトップページ
});


Route::middleware(['auth'])->group(function () {

    // 生徒用ルート
    Route::prefix('student')->group(function () {
        Route::get('/submissions', [SubmissionController::class, 'index'])->name('student.submissions.index');
        Route::get('/submissions/create', [SubmissionController::class, 'create'])->name('student.submissions.create');
        Route::post('/submissions', [SubmissionController::class, 'store'])->name('student.submissions.store');
    });

    // 講師用ルート
    Route::middleware(['teacher'])->prefix('teacher')->group(function () {
        Route::resource('tasks', TaskController::class);
        Route::resource('reviews', ReviewController::class);
    });
});

Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard'); // ダミーでもOK
})->name('dashboard');

// レッスン一覧ページ
Route::get('/lessons', [LessonController::class, 'index'])->name('lessons.index');

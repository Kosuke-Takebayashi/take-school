<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all(); // DBからレッスン取得
        return view('lessons.index', compact('lessons'));
        // Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');
    }

    public function show(Lesson $lesson)
    {
        return view('lessons.show', compact('lesson'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    use \Illuminate\Foundation\Auth\Access\AuthorizesRequests;

    public function index()
    {
        $lessons = Lesson::all(); // DBからレッスン取得
        return view('lessons.index', compact('lessons'));
    }

    public function show(Lesson $lesson)
    {
        return view('lessons.show', compact('lesson'));
    }

    public function edit(Lesson $lesson)
    {
        $this->authorize('update', $lesson);
        return view('lessons.edit', compact('lesson'));
    }

    // 更新処理
    public function update(Request $request, Lesson $lesson)
    {
        $this->authorize('update', $lesson);

        $request->validate([
            'content' => 'required|string',
        ]);

        $lesson->content = $request->input('content');
        $lesson->save();

        return redirect()->route('lessons.index')->with('success', 'レッスンを更新しました。');
    }

    public function complete(Lesson $lesson)
    {
        auth()->user()->progress()->updateOrCreate(
            ['lesson_id' => $lesson->id],
            ['status' => 'completed']
        );

        return back();
    }
}

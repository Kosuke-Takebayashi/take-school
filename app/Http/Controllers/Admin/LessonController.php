<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function index()
    { /* 一覧 */
        $lessons = Lesson::all();  // データ取得
        return view('admin.lessons.index', compact('lessons'));
    }
    public function create()
    { /* 新規作成フォーム */
    }
    public function store(Request $request)
    { /* 保存処理 */
    }
    public function show(Lesson $lesson)
    { /* 詳細 */
    }
    public function edit(Lesson $lesson)
    { /* 編集フォーム */
    }
    public function update(Request $request, Lesson $lesson)
    { /* 更新処理 */
    }
    public function destroy(Lesson $lesson)
    { /* 削除処理 */
    }
}

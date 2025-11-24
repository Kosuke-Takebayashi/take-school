@extends('layouts.app')

@section('content')
<h1>課題提出</h1>

<form action="{{ route('student.submissions.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>課題を選択:</label>
    <select name="task_id">
        @foreach($tasks as $task)
            <option value="{{ $task->id }}">{{ $task->title }}</option>
        @endforeach
    </select>

    <label>ファイル添付:</label>
    <input type="file" name="file">

    <button type="submit">提出</button>
</form>
@endsection

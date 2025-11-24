@extends('layouts.app')

@section('content')
<h1>課題一覧</h1>

<a href="{{ route('tasks.create') }}">新しい課題作成</a>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>タイトル</th>
            <th>説明</th>
            <th>提出数</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->submissions->count() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

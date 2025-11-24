@extends('layouts.app')

@section('content')
<h1>レビュー一覧</h1>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>提出者</th>
            <th>課題</th>
            <th>コメント</th>
            <th>ステータス</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reviews as $review)
            <tr>
                <td>{{ $review->submission->user->name }}</td>
                <td>{{ $review->submission->task->title }}</td>
                <td>{{ $review->comment }}</td>
                <td>{{ $review->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

<x-app-layout>
    <h1>提出物一覧</h1>

    <a href="{{ route('student.submissions.create') }}">新しい提出</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>課題タイトル</th>
                <th>提出日時</th>
                <th>ステータス</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($submissions as $submission)
            <tr>
                <td>{{ $submission->task->title }}</td>
                <td>{{ $submission->created_at }}</td>
                <td>{{ $submission->review ? $submission->review->status : '未レビュー' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3">提出物はありません</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</x-app-layout>

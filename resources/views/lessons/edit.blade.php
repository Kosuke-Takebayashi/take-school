<form action="{{ route('lessons.update', $lesson->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="content" class="block font-bold mb-2">レッスン内容（Markdown）</label>
        <textarea name="content" id="content" rows="10" class="w-full border rounded p-2">{{ old('content', $lesson->content) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">保存</button>
</form>

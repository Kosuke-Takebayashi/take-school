<form action="{{ route('admin.lessons.update', $lesson) }}" method="POST">
    @csrf
    @method('PUT')

    <label>タイトル</label>
    <input type="text" name="title" value="{{ $lesson->title }}" class="border rounded p-2 w-full">

    <label>内容</label>
    <textarea name="description" class="border rounded p-2 w-full">{{ $lesson->description }}</textarea>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">更新</button>
</form>

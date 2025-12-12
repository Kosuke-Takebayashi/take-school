<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$lesson->title}}の編集画面
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('lessons.update', $lesson->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="content" class="block font-bold mb-2">レッスン内容（Markdown）</label>
                    <textarea name="content" id="editor" rows="10" class="tinymce-editor w-full border rounded p-2">{{ old('content', $lesson->content) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">保存</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            ClassicEditor.create(document.querySelector('#editor'))
                .catch(error => console.error(error));
        });
    </script>

</x-app-layout>

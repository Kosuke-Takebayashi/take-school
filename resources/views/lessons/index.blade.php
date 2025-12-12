<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            レッスン一覧
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col gap-4">
                @foreach($lessons as $lesson)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                    <h3 class="text-gray-600 font-bold text-lg">{{ $lesson->title }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">{{ $lesson->description }}</p>
                    @if($lesson->content)
                    <a href="{{ route('lessons.show', $lesson->id) }}" class="inline-block bg-blue-600 px-4 py-2 bg-blue  text-gray-600 dark:text-gray-300 hover:underline" target="_blank">動画を見る</a>
                    @endif
                    @can('update', $lesson)
                    <a href="{{ route('lessons.edit', $lesson->id) }}" class="px-4 py-2 bg-red-600 text-gray-600  dark:text-gray-300 btn btn-sm btn-primary">
                        編集
                    </a>
                    @endcan
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

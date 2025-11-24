<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            レッスン一覧
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($lessons as $lesson)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                    <h3 class="text-gray-600 font-bold text-lg">{{ $lesson->title }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">{{ $lesson->description }}</p>
                    @if($lesson->video_url)
                    <a href="{{ $lesson->video_url }}" class="text-blue-500 hover:underline" target="_blank">動画を見る</a>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

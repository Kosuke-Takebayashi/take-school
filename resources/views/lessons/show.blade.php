<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $lesson->title }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col gap-4">
                <div class="prose dark:text-gray-200 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">{!! $lesson->content !!}</div>
            </div>
        </div>
    </div>
</x-app-layout>

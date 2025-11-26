<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mt-3">これは管理画面です</p>
                    <p>今日は {{ date('Y年m月d日') }} です</p>
                    <p>こんにちは、コウスケさん</p>
                </div>

                <!-- レッスン一覧 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-xl font-semibold mb-4">レッスン一覧</h2>

                        <!-- 新規作成ボタン -->
                        <a href="{{ route('admin.lessons.create') }}"
                            class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4 hover:bg-blue-600">
                            新規作成
                        </a>

                        @if($lessons->isEmpty())
                        <p>まだレッスンは登録されていません。</p>
                        @else
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($lessons as $lesson)
                            <div class="border rounded p-4 bg-gray-50 dark:bg-gray-700">
                                <h3 class="text-lg font-bold">{{ $lesson->title }}</h3>
                                <p class="mt-2">{{ $lesson->description }}</p>
                                <div class="mt-4 flex gap-2">
                                    <a href="{{ route('admin.lessons.edit', $lesson) }}"
                                        class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">
                                        編集
                                    </a>
                                    <form action="{{ route('admin.lessons.destroy', $lesson) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                            削除
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

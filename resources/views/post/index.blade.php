<x-layout :title="$pageTitle">

    <div class="space-y-6">
        @foreach ($posts as $post)
            <div class="bg-white shadow rounded-2xl p-6 border border-gray-200 hover:shadow-lg transition">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    {{ $post->title }}
                </h2>

                <p class="text-gray-600 mb-4">
                    {{ $post->body }}
                </p>

                <div class="flex items-center justify-between text-sm text-gray-500">
                    <span>
                        {{ $post->published ? '✅ Published' : '❌ Draft' }}
                    </span>
                    <span class="italic">
                        By {{ $post->author }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>

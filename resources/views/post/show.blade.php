<x-layout :title="$pageTitle">
    <div class="max-w-3xl mx-auto mt-16">
        <!-- Post Card -->
        <div class="bg-white shadow-xl rounded-2xl p-10 border border-gray-200">
            
            <!-- Title -->
            <h2 class="text-4xl font-extrabold text-gray-900 mb-6">
                {{ $post->title }}
            </h2>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 mb-8">
                @foreach ($post->tags as $tag)
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-medium rounded-full shadow-sm hover:bg-blue-200 cursor-pointer">
                        #{{ $tag->title }}
                    </span>
                @endforeach
            </div>

            <!-- Body -->
            <p class="text-lg text-gray-700 leading-relaxed mb-10">
                {{ $post->body }}
            </p>

            <!-- Footer Info -->
            <div class="flex items-center justify-between text-base text-gray-600">
                <span>✍️ Author: 
                    <span class="font-semibold text-gray-800">{{ $post->author }}</span>
                </span>

                <span class="{{ $post->published ? 'text-green-600 font-bold' : 'text-red-600 font-bold' }}">
                    {{ $post->published ? 'Published ✅' : 'Unpublished ❌' }}
                </span>
            </div>
        </div>

        <!-- Comments Card -->
        <div class="bg-white shadow-xl rounded-2xl p-10 border border-gray-200 mt-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">💬 Comments</h3>

            @forelse ($post->comments as $comment)
                <div class="mb-4 pb-4 border-b border-gray-200 last:border-0">
                    <p class="text-gray-700">{{ $comment->content }}</p>
                    <span class="text-sm text-gray-500">— {{ $comment->author }}</span>
                </div>
            @empty
                <p class="text-gray-500 italic">No comments yet.</p>
            @endforelse
        </div>
    </div>
</x-layout>

<x-layout :title="$pageTitle">

    <div class="space-y-6">
        @foreach ($posts as $post)
            <div class="bg-white shadow rounded-2xl p-6 border border-gray-200 hover:shadow-lg transition relative">

                <!-- Delete Button -->
                <div class="absolute top-4 right-4">
                    <a href="/blog/{{ $post->id }}/delete" 
                       class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-red-500 text-white shadow hover:bg-red-600 hover:shadow-md transition"
                       title="Delete Post">
                       🗑️
                    </a>
                </div>

                <!-- Title -->
                <h2 class="text-2xl font-bold text-blue-900 mb-2 cursor-pointer hover:underline flex items-center gap-2"
                    onclick="window.location='/blog/{{ $post->id }}'">
                    {{ $post->title }}
                </h2>


                <!-- Body -->
                <p class="text-gray-600 mb-4">
                    {{ $post->body }}
                </p>

                <!-- Status & Author -->
                <div class="flex text-sm text-gray-500 items-center mb-4">
                    <span class="w-1/2 text-left">
                        {{ $post->published ? '✅ Published' : '❌ Draft' }}
                    </span>
                    <span class="w-1/2 text-right italic">
                        By {{ $post->author }}
                    </span>
                </div>

                <!-- Tags -->
                @if($post->tags->count())
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach ($post->tags as $tag)
                            <span class="px-3 py-1 text-sm bg-blue-100 text-blue-700 rounded-full">
                                #{{ $tag->title }}
                            </span>
                        @endforeach
                    </div>
                @endif

                <!-- Comments -->
                @foreach ($post->comments as $comment)
                    <div class="mb-2 p-3 bg-gray-50 rounded-lg border">
                        <p class="text-gray-700">{{ $comment->content }}</p>
                        <span class="text-sm text-gray-500">— {{ $comment->author }}</span>
                    </div>
                @endforeach
            </div>
        @endforeach
        {{ $posts->links() }}
    </div>
</x-layout>

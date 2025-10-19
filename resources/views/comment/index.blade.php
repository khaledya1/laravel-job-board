<x-layout :title="$pageTitle">

    <div class="space-y-6">
        @foreach ($comments as $comment)
            <div class="bg-white shadow rounded-2xl p-6 border border-gray-200 hover:shadow-lg transition cursor-pointer"
                 onclick="window.location='/comment/{{ $comment->id }}'">
                 
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    {{ $comment->content }}
                </h2>

                <p class="text-gray-600 mb-4">
                    {{ $comment->author }}
                </p>

                <p><b><a href="/blog/{{ $comment->post->id }}" class="text-gray-600 mb-4">
                    {{ $comment->post->title }}
                </a></b></p>
                <span class="text-center">
                    <a href="/comment/{{ $comment->id }}/delete" 
                        class="my-4 inline-block px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-lg shadow 
                        hover:bg-red-600 hover:shadow-md transition">
                        <b>Delete</b>
                    </a>
                </span>
            </div>
        @endforeach
        {{ $comments->links() }}

    </div>

</x-layout>

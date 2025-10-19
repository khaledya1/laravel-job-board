<x-layout :title="$pageTitle">

    <div class="space-y-6">
        @foreach ($tags as $tag)
            <div class="bg-white shadow rounded-2xl p-6 border border-gray-200 hover:shadow-lg transition cursor-pointer"
                 onclick="window.location='/tag/{{ $tag->id }}'">
                 
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    {{ $tag->title }}
                </h2>
                
                <span class="text-center">
                    <a href="/tag/{{ $tag->id }}/delete" 
                        class="my-4 inline-block px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-lg shadow 
                        hover:bg-red-600 hover:shadow-md transition">
                        <b>Delete</b>
                    </a>
                </span>
            </div>
        @endforeach
        {{ $tags->links() }}
    </div>

</x-layout>

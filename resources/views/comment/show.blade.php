<x-layout :title="$pageTitle">
    <div class="max-w-3xl mx-auto mt-16">
        <div class="bg-white shadow-xl rounded-2xl p-10 border border-gray-200">
            
            <!-- Title -->
            <h2 class="text-4xl font-extrabold text-gray-900 mb-8">
                {{ $comment->content }}
            </h2>

            <!-- Body -->
            <p class="text-lg text-gray-700 leading-relaxed mb-10">
                {{ $comment->author }}
            </p>

        </div>
    </div>
</x-layout>

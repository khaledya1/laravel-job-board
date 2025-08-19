<x-layout :title="$pageTitle">
    <div class="max-w-3xl mx-auto mt-16">
        <div class="bg-white shadow-xl rounded-2xl p-10 border border-gray-200">
            
            <!-- Title -->
            <h2 class="text-4xl font-extrabold text-gray-900 mb-8">
                {{ $post->title }}
            </h2>

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
    </div>
</x-layout>

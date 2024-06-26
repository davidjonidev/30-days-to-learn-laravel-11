<x-layout>
    <x-slot:heading>
        Blog Page
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
        @foreach ($posts as $post)
        <a href="/blog/{{ $post['id'] }}"
            class="border border-gray-200 rounded-md px-6 py-4 bg-gray-200 hover:bg-gray-300 transition-colors">

            <h2 class="font-bold mb-2">{{ $post['name'] }}</h2>

            <p>
                {{ Str::limit( $post['content'], 200, '...' ) }}
            </p>

            <div class="flex space-x-4 mt-3 font-semibold text-xs">
                @foreach ($post->tags as $tag)
                <span class="border rounded-md px-2 py-1 text-white bg-gradient-to-r from-gray-700 to-gray-900">{{
                    $tag['name'] }}</span>
                @endforeach
            </div>

        </a>
        @endforeach
    </div>

    {{ $posts->links() }}
</x-layout>
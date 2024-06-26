<x-layout>
    <x-slot:heading>
        {{ $post->name }}
    </x-slot:heading>

    <div class="flex space-x-4 mb-4 font-semibold text-sm">
        @foreach ($post->tags as $tag)
        <span
            class="border rounded-md px-3 py-2 text-white border-gray-200 bg-gradient-to-r from-gray-700 to-gray-900">{{
            $tag['name'] }}</span>
        @endforeach
    </div>

    <p class="whitespace-pre-wrap">{!! $post->content !!}</p>
</x-layout>
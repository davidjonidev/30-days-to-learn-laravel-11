<x-layout>
	<x-slot:heading>
        {{ $post['name'] }}
    </x-slot:heading>

    
    <p class="whitespace-pre-wrap">{!! $post['content'] !!}</p>
</x-layout>
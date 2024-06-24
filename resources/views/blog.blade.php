<x-layout>
	<x-slot:heading>
        Blog Page
    </x-slot:heading>
    
    <ul class="flex flex-col space-y-8">
    @foreach ($posts as $post)
        <li>
            <a href="/blog/{{ $post['id'] }}" class="text-blue-900 hover:underline">
                <strong>{{ $post['name'] }}:</strong>
            </a>
			<p>
				{{ Str::limit( $post['content'], 200, '...' ) }}
			</p>
        </li>
    @endforeach
    </ul>
</x-layout>
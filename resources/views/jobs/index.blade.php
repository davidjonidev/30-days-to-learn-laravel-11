<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}"
            class="border border-gray-200 rounded-md px-6 py-4 bg-gray-200 hover:bg-gray-300 transition-colors">

            <h3 class="font-bold mb-2 text-pretty">{{ $job['title'] }}</h3>

            <div>
                Pays {{ $job['salary'] }} per year.
            </div>

            <div
                class="mt-3 font-semibold text-xs max-w-fit border rounded-md px-2 py-1 text-white bg-gradient-to-r from-gray-700 to-gray-900">
                {{ $job->employer->name }}
            </div>

        </a>
        @endforeach
    </div>

    {{ $jobs->links() }}
</x-layout>
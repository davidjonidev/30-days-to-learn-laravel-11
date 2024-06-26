<x-layout>
	<x-slot:heading>
		About Page
	</x-slot:heading>

	<h2 class="font-bold text-lg">{{ $job->title }}</h2>

	<div
		class="mt-2 mb-3 font-semibold text-xs max-w-fit border rounded-md px-2 py-1 text-white bg-gradient-to-r from-gray-700 to-gray-900">
		{{ $job->employer->name }}
	</div>

	<p>
		This job pays {{ $job->salary }} per year.
	</p>

	<p class="mt-6">
		<x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
	</p>
</x-layout>
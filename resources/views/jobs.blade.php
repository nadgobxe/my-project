<x-layout title="Jobs">

    @foreach ($jobs as $job)
        <div class="h-64 bg-white shadow-md rounded-lg p-6 mb-4">
            <a href="jobs/{{ $job['id'] }}">
            <h2>{{ $job['title'] }}</h2>
            <p>Company: {{ $job['company'] }}</p>
            </a>
        </div>
    @endforeach
</x-layout>

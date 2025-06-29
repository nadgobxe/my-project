<x-layout title="Home">
    <h1>Welcome to My Laravel Project</h1>
    <p>This is a simple Laravel application.</p>
    <a href="{{ url('/') }}">Home Page</a>

    @foreach ($jobs as $job)
        <div class="job">
            <h2>{{ $job['title'] }}</h2>
            <p>Company: {{ $job['company'] }}</p>
        </div>
    @endforeach
</x-layout>
